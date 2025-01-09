<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTimeToLive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DescribeTimeToLiveRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
