<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string $executionRole
 * @property 'AMI_IMAGE'|'CONTAINER_IMAGE' $resourceType
 * @property list<Shapes\LifecyclePolicyDetail> $policyDetails
 * @property Shapes\LifecyclePolicyResourceSelection $resourceSelection
 * @property array<string, string>|null $tags
 * @property string $clientToken
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     executionRole: string,
     *     resourceType: 'AMI_IMAGE'|'CONTAINER_IMAGE',
     *     policyDetails: list<Shapes\LifecyclePolicyDetail>,
     *     resourceSelection: Shapes\LifecyclePolicyResourceSelection,
     *     tags?: array<string, string>|null,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
