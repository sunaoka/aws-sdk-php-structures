<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $noMinRetentionPeriod
 * @property string|null $policyName
 * @property string|null $resource
 * @property 'index'|null $resourceType
 * @property string|null $retentionPeriod
 * @property 'retention'|null $type
 */
class EffectiveLifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     noMinRetentionPeriod?: bool|null,
     *     policyName?: string|null,
     *     resource?: string|null,
     *     resourceType?: 'index'|null,
     *     retentionPeriod?: string|null,
     *     type?: 'retention'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
