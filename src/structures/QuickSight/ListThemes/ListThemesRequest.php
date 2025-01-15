<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'QUICKSIGHT'|'CUSTOM'|'ALL'|null $Type
 */
class ListThemesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Type?: 'QUICKSIGHT'|'CUSTOM'|'ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
