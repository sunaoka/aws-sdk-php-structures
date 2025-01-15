<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'opensearchDashboards.dashboardAdmin.users'|'opensearchDashboards.dashboardAdmin.groups'|null $key
 * @property string|null $value
 */
class AppConfig extends Shape
{
    /**
     * @param array{
     *     key?: 'opensearchDashboards.dashboardAdmin.users'|'opensearchDashboards.dashboardAdmin.groups'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
