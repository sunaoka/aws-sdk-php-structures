<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property string $TableName
 * @property string $StreamLabel
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string,
     *     TableName?: string,
     *     StreamLabel?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
