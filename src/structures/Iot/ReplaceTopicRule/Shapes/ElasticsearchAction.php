<?php

namespace Sunaoka\Aws\Structures\Iot\ReplaceTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property string $endpoint
 * @property string $index
 * @property string $type
 * @property string $id
 */
class ElasticsearchAction extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     endpoint: string,
     *     index: string,
     *     type: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
