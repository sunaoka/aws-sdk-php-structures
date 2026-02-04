<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $RegionName
 */
class DescribeRegionRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     RegionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
