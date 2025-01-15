<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 * @property string|null $TableName
 * @property string|null $StreamLabel
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     StreamArn?: string|null,
     *     TableName?: string|null,
     *     StreamLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
