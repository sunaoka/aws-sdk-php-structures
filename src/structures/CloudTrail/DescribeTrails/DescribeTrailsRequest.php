<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeTrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $trailNameList
 * @property bool $includeShadowTrails
 */
class DescribeTrailsRequest extends Request
{
    /**
     * @param array{
     *     trailNameList?: list<string>,
     *     includeShadowTrails?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
