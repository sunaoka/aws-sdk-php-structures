<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $ReplicaRegion
 * @property string|null $Policy
 * @property bool|null $BypassPolicyLockoutSafetyCheck
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class ReplicateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     ReplicaRegion: string,
     *     Policy?: string|null,
     *     BypassPolicyLockoutSafetyCheck?: bool|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
