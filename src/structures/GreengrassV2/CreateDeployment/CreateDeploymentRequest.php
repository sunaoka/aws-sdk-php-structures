<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetArn
 * @property string $deploymentName
 * @property array<string, Shapes\ComponentDeploymentSpecification> $components
 * @property Shapes\DeploymentIoTJobConfiguration $iotJobConfiguration
 * @property Shapes\DeploymentPolicies $deploymentPolicies
 * @property string $parentTargetArn
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     targetArn: string,
     *     deploymentName?: string,
     *     components?: array<string, Shapes\ComponentDeploymentSpecification>,
     *     iotJobConfiguration?: Shapes\DeploymentIoTJobConfiguration,
     *     deploymentPolicies?: Shapes\DeploymentPolicies,
     *     parentTargetArn?: string,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
