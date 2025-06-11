<?php

namespace Sunaoka\Aws\Structures\EKS\CreatePodIdentityAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $namespace
 * @property string $serviceAccount
 * @property string $roleArn
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 * @property bool|null $disableSessionTags
 * @property string|null $targetRoleArn
 */
class CreatePodIdentityAssociationRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     namespace: string,
     *     serviceAccount: string,
     *     roleArn: string,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null,
     *     disableSessionTags?: bool|null,
     *     targetRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
