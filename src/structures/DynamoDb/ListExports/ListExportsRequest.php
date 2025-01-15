<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableArn
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExportsRequest extends Request
{
    /**
     * @param array{
     *     TableArn?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
