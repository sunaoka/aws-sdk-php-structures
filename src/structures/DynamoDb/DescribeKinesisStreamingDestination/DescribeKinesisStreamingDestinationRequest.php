<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeKinesisStreamingDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DescribeKinesisStreamingDestinationRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
