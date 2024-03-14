<?php 

class Conversation {
    private int $id;
    private array $messages = [];
    private array $user1 = [];
    private array $user2 = [];
    public function __construct(private int $user1_id, private int $user2_id)
    {
        
    }

    public function toArray() {
        {
            $conversationArray = [
                "id" => $this->id,
                "user1_id" => $this->user1_id,
                "user2_id" => $this->user2_id,
            ];
            if ($this->messages !== null) {
                $conversationArray["messages"] = $this->messages;
            }
            if ($this->user1 !== null) {
                $conversationArray["user1"] = $this->user1;
            } 
            if ($this->user2 !== null) {
                $conversationArray["user2"] = $this->user2;
            } 
        
            return $conversationArray;
        }
    }

    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   mixed  $id  
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user1_id
     *
     * @return  mixed
     */
    public function getUser1_id()
    {
        return $this->user1_id;
    }

    /**
     * Set the value of user1_id
     *
     * @param   mixed  $user1_id  
     *
     * @return  self
     */
    public function setUser1_id($user1_id)
    {
        $this->user1_id = $user1_id;

        return $this;
    }

    /**
     * Get the value of user2_id
     *
     * @return  mixed
     */
    public function getUser2_id()
    {
        return $this->user2_id;
    }

    /**
     * Set the value of user2_id
     *
     * @param   mixed  $user2_id  
     *
     * @return  self
     */
    public function setUser2_id($user2_id)
    {
        $this->user2_id = $user2_id;

        return $this;
    }

    /**
     * Get the value of messages
     *
     * @return  mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set the value of messages
     *
     * @param   mixed  $messages  
     *
     * @return  self
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * Get the value of user1
     *
     * @return  mixed
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set the value of user1
     *
     * @param   mixed  $user1  
     *
     * @return  self
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get the value of user2
     *
     * @return  mixed
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set the value of user2
     *
     * @param   mixed  $user2  
     *
     * @return  self
     */
    public function setUser2($user2)
    {
        $this->user2 = $user2;

        return $this;
    }
}