<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 */
class DescribeTableRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
