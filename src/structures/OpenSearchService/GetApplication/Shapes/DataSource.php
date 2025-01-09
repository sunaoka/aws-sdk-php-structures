<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceArn
 * @property string $dataSourceDescription
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceArn?: string,
     *     dataSourceDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
