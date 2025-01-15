<?php

namespace Sunaoka\Aws\Structures\Emr\ListReleaseLabels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReleaseLabelFilter|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReleaseLabelsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\ReleaseLabelFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
