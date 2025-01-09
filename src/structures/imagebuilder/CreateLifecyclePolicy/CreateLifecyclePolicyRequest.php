<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property 'DISABLED'|'ENABLED' $status
 * @property string $executionRole
 * @property 'AMI_IMAGE'|'CONTAINER_IMAGE' $resourceType
 * @property list<Shapes\LifecyclePolicyDetail> $policyDetails
 * @property Shapes\LifecyclePolicyResourceSelection $resourceSelection
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     status?: 'DISABLED'|'ENABLED',
     *     executionRole: string,
     *     resourceType: 'AMI_IMAGE'|'CONTAINER_IMAGE',
     *     policyDetails: list<Shapes\LifecyclePolicyDetail>,
     *     resourceSelection: Shapes\LifecyclePolicyResourceSelection,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
