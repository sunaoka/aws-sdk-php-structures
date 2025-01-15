<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateIntegrationWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property 'APPFLOW_INTEGRATION' $WorkflowType
 * @property Shapes\IntegrationConfig $IntegrationConfig
 * @property string $ObjectTypeName
 * @property string $RoleArn
 * @property array<string, string>|null $Tags
 */
class CreateIntegrationWorkflowRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     WorkflowType: 'APPFLOW_INTEGRATION',
     *     IntegrationConfig: Shapes\IntegrationConfig,
     *     ObjectTypeName: string,
     *     RoleArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
