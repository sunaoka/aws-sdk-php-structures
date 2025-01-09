<?php

namespace Sunaoka\Aws\Structures\Emr\ListReleaseLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReleaseLabelFilter $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListReleaseLabelsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ReleaseLabelFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
