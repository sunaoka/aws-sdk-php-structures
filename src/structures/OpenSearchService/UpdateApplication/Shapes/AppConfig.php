<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'opensearchDashboards.dashboardAdmin.users'|'opensearchDashboards.dashboardAdmin.groups' $key
 * @property string $value
 */
class AppConfig extends Shape
{
    /**
     * @param array{
     *     key?: 'opensearchDashboards.dashboardAdmin.users'|'opensearchDashboards.dashboardAdmin.groups',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
