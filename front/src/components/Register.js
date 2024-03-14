import { useSelector } from "react-redux";
import { Navigate, NavLink } from "react-router-dom";
import {
  selectCurrentUser,
  selectIsLoggedIn,
} from "../reducers/authUser.reducer";
import "../styles/register.css";
import Logo from "./Logo";

const Register = () => {
  const loggedIn = useSelector(selectIsLoggedIn);
  const user = useSelector(selectCurrentUser);

  if (loggedIn) {
    return <Navigate to="/home" />;
  }

  return (
    <section className="register">
      <img
        src={process.env.PUBLIC_URL + "/img/kindrlogobeige.gif"}
        alt="KindR Logo Gif"
      />
      <article>
        <NavLink to="/reg/parent_register">
          <em>¨</em> Parents <em>µ</em>
        </NavLink>
        <NavLink to="/reg/pro_register">
          <em>~</em> Pro <em>µ</em>
        </NavLink>
        <NavLink to="/reg/sign_in">
          <em>¨</em> Sign In <em>[</em>
        </NavLink>
      </article>
    </section>
  );
};

export default Register;
