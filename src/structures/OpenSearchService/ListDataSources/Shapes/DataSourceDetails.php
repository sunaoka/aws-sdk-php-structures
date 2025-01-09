<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataSourceType $DataSourceType
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'DISABLED' $Status
 */
class DataSourceDetails extends Shape
{
    /**
     * @param array{
     *     DataSourceType?: DataSourceType,
     *     Name?: string,
     *     Description?: string,
     *     Status?: 'ACTIVE'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
