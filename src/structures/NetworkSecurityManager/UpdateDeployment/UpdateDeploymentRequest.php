<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\UpdateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentIdentifier
 * @property string $updateToken
 * @property string|null $deploymentDescription
 * @property Shapes\DeploymentConfiguration|null $deploymentConfiguration
 * @property list<Shapes\PolicyReference>|null $associatedPolicyList
 * @property list<Shapes\ScopeReference>|null $associatedScopeList
 * @property bool $isPublished
 * @property string|null $clientToken
 */
class UpdateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentIdentifier: string,
     *     updateToken: string,
     *     deploymentDescription?: string|null,
     *     deploymentConfiguration?: Shapes\DeploymentConfiguration|null,
     *     associatedPolicyList?: list<Shapes\PolicyReference>|null,
     *     associatedScopeList?: list<Shapes\ScopeReference>|null,
     *     isPublished: bool,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
