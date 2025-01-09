<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property int<1, 25> $MaxResults
 * @property string $NextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     TableArn?: string,
     *     MaxResults?: int<1, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
