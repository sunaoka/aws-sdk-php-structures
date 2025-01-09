<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListTemplateAliasesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
