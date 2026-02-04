<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\AddRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $RegionName
 */
class AddRegionRequest extends Request
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
