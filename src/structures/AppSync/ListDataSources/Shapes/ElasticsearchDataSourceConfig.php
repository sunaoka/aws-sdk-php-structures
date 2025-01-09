<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string $awsRegion
 */
class ElasticsearchDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     awsRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
