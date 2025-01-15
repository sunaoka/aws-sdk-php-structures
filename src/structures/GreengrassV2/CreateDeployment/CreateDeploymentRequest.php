<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetArn
 * @property string|null $deploymentName
 * @property array<string, Shapes\ComponentDeploymentSpecification>|null $components
 * @property Shapes\DeploymentIoTJobConfiguration|null $iotJobConfiguration
 * @property Shapes\DeploymentPolicies|null $deploymentPolicies
 * @property string|null $parentTargetArn
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     targetArn: string,
     *     deploymentName?: string|null,
     *     components?: array<string, Shapes\ComponentDeploymentSpecification>|null,
     *     iotJobConfiguration?: Shapes\DeploymentIoTJobConfiguration|null,
     *     deploymentPolicies?: Shapes\DeploymentPolicies|null,
     *     parentTargetArn?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
