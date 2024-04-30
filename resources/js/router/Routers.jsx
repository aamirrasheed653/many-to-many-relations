import { createBrowserRouter } from "react-router-dom";
import EmployeeForm from "../views/Employee/EmployeeForm";
import DashboardLayout from "../layouts/DashboardLayout";

const router = createBrowserRouter([
    {
        path: "/test",
        element: <EmployeeForm />,
    },
    {
        path: "/",
        element: <DashboardLayout />,
    },
]);
export default router