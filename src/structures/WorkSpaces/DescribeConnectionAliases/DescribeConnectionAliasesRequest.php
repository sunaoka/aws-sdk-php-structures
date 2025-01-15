<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $AliasIds
 * @property string|null $ResourceId
 * @property int<1, 25>|null $Limit
 * @property string|null $NextToken
 */
class DescribeConnectionAliasesRequest extends Request
{
    /**
     * @param array{
     *     AliasIds?: list<string>|null,
     *     ResourceId?: string|null,
     *     Limit?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
