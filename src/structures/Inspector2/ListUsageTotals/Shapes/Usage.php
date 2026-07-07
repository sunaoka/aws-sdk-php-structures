<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS'|'CODE_REPOSITORY_SAST'|'CODE_REPOSITORY_IAC'|'CODE_REPOSITORY_SCA'|'EC2_AGENTLESS_INSTANCE_HOURS'|'AZURE_CONTAINER_IMAGE_INITIAL_SCAN'|'AZURE_CONTAINER_IMAGE_RESCAN'|'AZURE_VM_AGENT_BASED_INSTANCE_HOURS'|'AZURE_SERVERLESS_FUNCTION_HOURS'|null $type
 * @property double|null $total
 * @property double|null $estimatedMonthlyCost
 * @property 'USD'|null $currency
 * @property 'AWS'|'AZURE'|'NOT_APPLICABLE'|null $cloudProvider
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     type?: 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS'|'CODE_REPOSITORY_SAST'|'CODE_REPOSITORY_IAC'|'CODE_REPOSITORY_SCA'|'EC2_AGENTLESS_INSTANCE_HOURS'|'AZURE_CONTAINER_IMAGE_INITIAL_SCAN'|'AZURE_CONTAINER_IMAGE_RESCAN'|'AZURE_VM_AGENT_BASED_INSTANCE_HOURS'|'AZURE_SERVERLESS_FUNCTION_HOURS'|null,
     *     total?: double|null,
     *     estimatedMonthlyCost?: double|null,
     *     currency?: 'USD'|null,
     *     cloudProvider?: 'AWS'|'AZURE'|'NOT_APPLICABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
