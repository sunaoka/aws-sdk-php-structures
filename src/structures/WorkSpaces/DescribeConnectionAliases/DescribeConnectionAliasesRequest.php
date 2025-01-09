<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AliasIds
 * @property string $ResourceId
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeConnectionAliasesRequest extends Request
{
    /**
     * @param array{
     *     AliasIds?: list<string>,
     *     ResourceId?: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
