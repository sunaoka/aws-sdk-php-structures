<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string|null $Alias
 * @property int<0, max>|null $Version
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Alias?: string|null,
     *     Version?: int<0, max>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
