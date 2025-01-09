<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AliasIds
 * @property string $ResourceId
 * @property int<1, 25> $Limit
 * @property string $NextToken
 */
class DescribeConnectionAliasesRequest extends Request
{
    /**
     * @param array{
     *     AliasIds?: list<string>,
     *     ResourceId?: string,
     *     Limit?: int<1, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
