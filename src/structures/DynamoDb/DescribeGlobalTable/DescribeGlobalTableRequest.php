<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalTableName
 */
class DescribeGlobalTableRequest extends Request
{
    /**
     * @param array{GlobalTableName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
