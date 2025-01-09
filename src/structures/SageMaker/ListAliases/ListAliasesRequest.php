<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $Alias
 * @property int<0, max> $Version
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Alias?: string,
     *     Version?: int<0, max>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
