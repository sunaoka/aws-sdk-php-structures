<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreatePolicySnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreatePolicySnapshotRequest extends Request
{
    /**
     * @param array{
     *     policyIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
