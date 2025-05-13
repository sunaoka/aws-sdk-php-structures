<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $deletionProtectionEnabled
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 * @property Shapes\MultiRegionProperties|null $multiRegionProperties
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     deletionProtectionEnabled?: bool|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null,
     *     multiRegionProperties?: Shapes\MultiRegionProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
