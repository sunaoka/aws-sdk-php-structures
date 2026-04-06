<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecyclePolicyArn
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string $executionRole
 * @property 'AMI_IMAGE'|'CONTAINER_IMAGE' $resourceType
 * @property list<Shapes\LifecyclePolicyDetail> $policyDetails
 * @property Shapes\LifecyclePolicyResourceSelection $resourceSelection
 * @property string $clientToken
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     lifecyclePolicyArn: string,
     *     description?: string|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     executionRole: string,
     *     resourceType: 'AMI_IMAGE'|'CONTAINER_IMAGE',
     *     policyDetails: list<Shapes\LifecyclePolicyDetail>,
     *     resourceSelection: Shapes\LifecyclePolicyResourceSelection,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
