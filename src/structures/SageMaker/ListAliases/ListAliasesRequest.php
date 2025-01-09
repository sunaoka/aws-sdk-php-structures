<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageName
 * @property string $Alias
 * @property int $Version
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     ImageName: string,
     *     Alias?: string,
     *     Version?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
