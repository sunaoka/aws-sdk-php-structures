<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AddRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $RegionName
 * @property Shapes\DirectoryVpcSettings $VPCSettings
 */
class AddRegionRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     RegionName: string,
     *     VPCSettings: Shapes\DirectoryVpcSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
