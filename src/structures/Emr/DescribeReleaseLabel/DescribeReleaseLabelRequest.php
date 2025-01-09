<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReleaseLabel
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeReleaseLabelRequest extends Request
{
    /**
     * @param array{
     *     ReleaseLabel?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
