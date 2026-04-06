<?php

namespace Sunaoka\Aws\Structures\DSQL\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $deletionProtectionEnabled
 * @property string|null $kmsEncryptionKey
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 * @property Shapes\MultiRegionProperties|null $multiRegionProperties
 * @property string|null $policy
 * @property bool|null $bypassPolicyLockoutSafetyCheck
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     deletionProtectionEnabled?: bool|null,
     *     kmsEncryptionKey?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null,
     *     multiRegionProperties?: Shapes\MultiRegionProperties|null,
     *     policy?: string|null,
     *     bypassPolicyLockoutSafetyCheck?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
