<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DescribeTrails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $trailNameList
 * @property bool|null $includeShadowTrails
 */
class DescribeTrailsRequest extends Request
{
    /**
     * @param array{
     *     trailNameList?: list<string>|null,
     *     includeShadowTrails?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
