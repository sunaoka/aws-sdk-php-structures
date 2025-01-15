<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceType|null $DataSourceType
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'DISABLED'|null $Status
 */
class DataSourceDetails extends Shape
{
    /**
     * @param array{
     *     DataSourceType?: DataSourceType|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
