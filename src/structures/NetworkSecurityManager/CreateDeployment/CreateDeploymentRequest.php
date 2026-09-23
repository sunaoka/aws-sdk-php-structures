<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $deploymentName
 * @property string|null $deploymentDescription
 * @property Shapes\DeploymentConfiguration $deploymentConfiguration
 * @property list<Shapes\PolicyReference> $associatedPolicyList
 * @property list<Shapes\ScopeReference> $associatedScopeList
 * @property bool|null $isPublished
 * @property array<string, string>|null $tags
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     deploymentName: string,
     *     deploymentDescription?: string|null,
     *     deploymentConfiguration: Shapes\DeploymentConfiguration,
     *     associatedPolicyList: list<Shapes\PolicyReference>,
     *     associatedScopeList: list<Shapes\ScopeReference>,
     *     isPublished?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
