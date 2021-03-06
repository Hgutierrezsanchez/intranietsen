<?php

/* administracion/listado_usuarios.twig */
class __TwigTemplate_d137772af317553a5bf2f26101940ab770c3070280caf39948c60da43ef587f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/listado_usuarios.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appStylos($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> GESTIÓN DE USUARIOS
        <a class=\"btn btn-primary btn-social pull-right\" href=\"administracion/registro_user\" title=\"Agregar\" data-toggle=\"tooltip\">
          <i class=\"fa fa-plus\"></i> Agregar
        </a>
        <a class=\"btn btn-success btn-social pull-right\" href=\"administracion/exporta_excel_users\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
          <i class=\"fa fa-arrow-down\"></i> Exportar Excel
        </a>
      </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>No</th>
              \t<th>Nombre</th>
              \t<th>E-Mail</th>
                <th>Fono</th>
                <th>Cargo</th>
                <th>PERFIL</th>
              \t<th>ROL</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 36
        $context["No"] = 1;
        // line 37
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_users"] ?? null))) {
                // line 38
                echo "                <tr>
                  <td>";
                // line 39
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                  <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                  <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "email", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fono", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cargo", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "perfil", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 45
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rol", array())) ? ("Admin") : ("Usuario"));
                echo "</td>
                  <td class='center' width='150'>
                    <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"administracion/editar_user/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">
                    <i class='glyphicon glyphicon-edit'></i>
                    </a>
                    <button type=\"button\" id=\"btn_reset_pass\" title='Reset Pass' class=\"btn btn-info btn-sm\" data-toggle=\"modal\" onclick=\"carga_modal_reset_pass('";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "')\"><i class='glyphicon glyphicon-cog'></i></button>
                    <a data-toggle='tooltip' data-placement='top' title='Revisar Perfil de accesos' class='btn btn-info btn-sm' href=\"administracion/editar_perfil_user/";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">
                    <i class='glyphicon glyphicon-list-alt'></i>
                    </a>
                    ";
                // line 54
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 55
                    echo "                        <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"administracion/estado_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                        <i class='glyphicon glyphicon-off'></i>
                        </a>

                    ";
                } else {
                    // line 60
                    echo "                        <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"administracion/estado_user/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "\">
                        <i class='glyphicon glyphicon-check'></i>
                        </a>

                    ";
                }
                // line 65
                echo "
                  </td>
                </tr>
                ";
                // line 68
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 69
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  ";
        // line 77
        $this->loadTemplate("administracion/reset_pass_user", "administracion/listado_usuarios.twig", 77)->display($context);
    }

    // line 79
    public function block_appScript($context, array $blocks = array())
    {
        // line 80
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/administracion/administracion.js\"></script>

    <script>
     \$(\"#dataTables1\").dataTable({
                \"language\": {
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"No hay datos para mostrar\",
                    \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\":\"Procesando...\",
                    \"infoEmpty\":\"No hay entradas para mostrar\",
                    \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                    \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                    }
                              },
                \"autoWidth\": true
            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "administracion/listado_usuarios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  176 => 79,  172 => 77,  163 => 70,  156 => 69,  154 => 68,  149 => 65,  140 => 60,  131 => 55,  129 => 54,  123 => 51,  119 => 50,  113 => 47,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  92 => 41,  88 => 40,  84 => 39,  81 => 38,  75 => 37,  73 => 36,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
{% endblock %}
{% block appBody %}
  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> GESTIÓN DE USUARIOS
        <a class=\"btn btn-primary btn-social pull-right\" href=\"administracion/registro_user\" title=\"Agregar\" data-toggle=\"tooltip\">
          <i class=\"fa fa-plus\"></i> Agregar
        </a>
        <a class=\"btn btn-success btn-social pull-right\" href=\"administracion/exporta_excel_users\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
          <i class=\"fa fa-arrow-down\"></i> Exportar Excel
        </a>
      </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>No</th>
              \t<th>Nombre</th>
              \t<th>E-Mail</th>
                <th>Fono</th>
                <th>Cargo</th>
                <th>PERFIL</th>
              \t<th>ROL</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              {% set No = 1 %}
              {% for d in db_users if false != db_users %}
                <tr>
                  <td>{{ No }}</td>
                  <td>{{ d.name|raw|title }}</td>
                  <td>{{ d.email }}</td>
                  <td>{{ d.fono }}</td>
                  <td>{{ d.cargo }}</td>
                  <td>{{ d.perfil  }}</td>
                  <td>{{ d.rol ? \"Admin\":\"Usuario\"  }}</td>
                  <td class='center' width='150'>
                    <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"administracion/editar_user/{{ d.id_user }}\">
                    <i class='glyphicon glyphicon-edit'></i>
                    </a>
                    <button type=\"button\" id=\"btn_reset_pass\" title='Reset Pass' class=\"btn btn-info btn-sm\" data-toggle=\"modal\" onclick=\"carga_modal_reset_pass('{{ d.id_user }}')\"><i class='glyphicon glyphicon-cog'></i></button>
                    <a data-toggle='tooltip' data-placement='top' title='Revisar Perfil de accesos' class='btn btn-info btn-sm' href=\"administracion/editar_perfil_user/{{ d.id_user }}\">
                    <i class='glyphicon glyphicon-list-alt'></i>
                    </a>
                    {% if d.estado == 0 %}
                        <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"administracion/estado_user/{{ d.id_user }}\">
                        <i class='glyphicon glyphicon-off'></i>
                        </a>

                    {% else %}
                        <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"administracion/estado_user/{{ d.id_user }}\">
                        <i class='glyphicon glyphicon-check'></i>
                        </a>

                    {% endif %}

                  </td>
                </tr>
                {% set No =  No + 1 %}
              {% endfor %}
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  {% include 'administracion/reset_pass_user' %}
{% endblock %}
{% block appScript %}
    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/administracion/administracion.js\"></script>

    <script>
     \$(\"#dataTables1\").dataTable({
                \"language\": {
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"No hay datos para mostrar\",
                    \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\":\"Procesando...\",
                    \"infoEmpty\":\"No hay entradas para mostrar\",
                    \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                    \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                    }
                              },
                \"autoWidth\": true
            });
    </script>

{% endblock %}
", "administracion/listado_usuarios.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\administracion\\listado_usuarios.twig");
    }
}
