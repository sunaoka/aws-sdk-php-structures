<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property string|null $executionRole
 * @property 'AMI_IMAGE'|'CONTAINER_IMAGE'|null $resourceType
 * @property list<LifecyclePolicyDetail>|null $policyDetails
 * @property LifecyclePolicyResourceSelection|null $resourceSelection
 * @property \Aws\Api\DateTimeResult|null $dateCreated
 * @property \Aws\Api\DateTimeResult|null $dateUpdated
 * @property \Aws\Api\DateTimeResult|null $dateLastRun
 * @property array<string, string>|null $tags
 */
class LifecyclePolicy extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     status?: 'DISABLED'|'ENABLED'|null,
     *     executionRole?: string|null,
     *     resourceType?: 'AMI_IMAGE'|'CONTAINER_IMAGE'|null,
     *     policyDetails?: list<LifecyclePolicyDetail>|null,
     *     resourceSelection?: LifecyclePolicyResourceSelection|null,
     *     dateCreated?: \Aws\Api\DateTimeResult|null,
     *     dateUpdated?: \Aws\Api\DateTimeResult|null,
     *     dateLastRun?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
