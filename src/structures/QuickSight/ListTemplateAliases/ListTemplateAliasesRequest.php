<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTemplateAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $TemplateId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTemplateAliasesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     TemplateId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
