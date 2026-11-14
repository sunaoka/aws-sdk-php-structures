<?php

namespace Sunaoka\Aws\Structures\LambdaCore\ListRuntimeAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RuntimeName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListRuntimeAliasesRequest extends Request
{
    /**
     * @param array{
     *     RuntimeName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
