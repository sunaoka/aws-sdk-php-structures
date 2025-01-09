<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property int $Limit
 * @property string $ExclusiveStartStreamArn
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string,
     *     Limit?: int,
     *     ExclusiveStartStreamArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
