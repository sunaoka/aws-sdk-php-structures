<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeploymentSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentIdentifier
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateDeploymentSnapshotRequest extends Request
{
    /**
     * @param array{
     *     deploymentIdentifier: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
