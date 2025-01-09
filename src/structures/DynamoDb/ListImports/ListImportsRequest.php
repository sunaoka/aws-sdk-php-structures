<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableArn
 * @property int $PageSize
 * @property string $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     TableArn?: string,
     *     PageSize?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
