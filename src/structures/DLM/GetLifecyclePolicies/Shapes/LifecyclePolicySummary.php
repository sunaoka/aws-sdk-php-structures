<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $Description
 * @property 'ENABLED'|'DISABLED'|'ERROR' $State
 * @property array<string, string> $Tags
 * @property 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY' $PolicyType
 * @property bool $DefaultPolicy
 */
class LifecyclePolicySummary extends Shape
{
    /**
     * @param array{
     *     PolicyId?: string,
     *     Description?: string,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR',
     *     Tags?: array<string, string>,
     *     PolicyType?: 'EBS_SNAPSHOT_MANAGEMENT'|'IMAGE_MANAGEMENT'|'EVENT_BASED_POLICY',
     *     DefaultPolicy?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
