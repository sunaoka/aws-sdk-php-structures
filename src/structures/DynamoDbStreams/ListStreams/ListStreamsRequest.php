<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property int<1, max> $Limit
 * @property string $ExclusiveStartStreamArn
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string,
     *     Limit?: int<1, max>,
     *     ExclusiveStartStreamArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
