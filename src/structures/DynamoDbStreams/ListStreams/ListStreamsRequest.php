<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableName
 * @property int<1, max>|null $Limit
 * @property string|null $ExclusiveStartStreamArn
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     Limit?: int<1, max>|null,
     *     ExclusiveStartStreamArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
