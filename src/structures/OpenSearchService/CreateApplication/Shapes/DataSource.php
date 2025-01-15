<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSourceArn
 * @property string|null $dataSourceDescription
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     dataSourceArn?: string|null,
     *     dataSourceDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
