<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyId
 * @property string|null $Description
 * @property 'ENABLED'|'DISABLED'|'ERROR'|null $State
 * @property array<string, string>|null $Tags
 * @property 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null $PolicyType
 * @property bool|null $DefaultPolicy
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string|null,
     *     Description?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR'|null,
     *     Tags?: array<string, string>|null,
     *     PolicyType?: 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY'|null,
     *     DefaultPolicy?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
