<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 */
class DescribeTableRequest extends Request
{
    /**
     * @param array{TableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
