<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $ReplicaRegion
 * @property string $Policy
 * @property bool $BypassPolicyLockoutSafetyCheck
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class ReplicateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     ReplicaRegion: string,
     *     Policy?: string,
     *     BypassPolicyLockoutSafetyCheck?: bool,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
