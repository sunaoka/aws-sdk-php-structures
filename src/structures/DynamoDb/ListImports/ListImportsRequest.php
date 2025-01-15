<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableArn
 * @property int<1, 25>|null $PageSize
 * @property string|null $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     TableArn?: string|null,
     *     PageSize?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
