<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $roleArn
 * @property PutItemInput $putItem
 */
class DynamoDBv2Action extends Shape
{
    /**
     * @param array{
     *     roleArn: string,
     *     putItem: PutItemInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
