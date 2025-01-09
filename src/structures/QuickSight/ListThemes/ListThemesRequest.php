<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'QUICKSIGHT'|'CUSTOM'|'ALL' $Type
 */
class ListThemesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Type?: 'QUICKSIGHT'|'CUSTOM'|'ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
