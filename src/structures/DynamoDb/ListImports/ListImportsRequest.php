<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property int<1, 25> $PageSize
 * @property string $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     TableArn?: string,
     *     PageSize?: int<1, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
