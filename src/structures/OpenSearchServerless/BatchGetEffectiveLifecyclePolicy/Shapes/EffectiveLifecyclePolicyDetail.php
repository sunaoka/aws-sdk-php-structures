<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retention'|null $type
 * @property string|null $resource
 * @property string|null $policyName
 * @property 'index'|null $resourceType
 * @property string|null $retentionPeriod
 * @property bool|null $noMinRetentionPeriod
 */
class EffectiveLifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     type?: 'retention'|null,
     *     resource?: string|null,
     *     policyName?: string|null,
     *     resourceType?: 'index'|null,
     *     retentionPeriod?: string|null,
     *     noMinRetentionPeriod?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
