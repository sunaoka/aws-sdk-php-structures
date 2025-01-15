<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReleaseLabel
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeReleaseLabelRequest extends Request
{
    /**
     * @param array{
     *     ReleaseLabel?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
