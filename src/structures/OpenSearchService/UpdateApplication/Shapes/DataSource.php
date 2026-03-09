<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSourceArn
 * @property string|null $dataSourceDescription
 * @property string|null $iamRoleForDataSourceArn
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceArn?: string|null,
     *     dataSourceDescription?: string|null,
     *     iamRoleForDataSourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
