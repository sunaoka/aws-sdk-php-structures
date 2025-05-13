<?php

namespace Sunaoka\Aws\Structures\DSQL\UpdateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property bool|null $deletionProtectionEnabled
 * @property string|null $clientToken
 * @property Shapes\MultiRegionProperties|null $multiRegionProperties
 */
class UpdateClusterRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     deletionProtectionEnabled?: bool|null,
     *     clientToken?: string|null,
     *     multiRegionProperties?: Shapes\MultiRegionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
