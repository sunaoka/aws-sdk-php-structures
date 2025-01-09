<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListThemeAliasesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
