<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListThemeAliasesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
