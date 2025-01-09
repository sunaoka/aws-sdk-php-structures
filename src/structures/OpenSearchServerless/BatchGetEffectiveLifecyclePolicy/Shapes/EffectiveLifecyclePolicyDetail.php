<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $noMinRetentionPeriod
 * @property string $policyName
 * @property string $resource
 * @property 'index' $resourceType
 * @property string $retentionPeriod
 * @property 'retention' $type
 */
class EffectiveLifecyclePolicyDetail extends Shape
{
    /**
     * @param array{
     *     noMinRetentionPeriod?: bool,
     *     policyName?: string,
     *     resource?: string,
     *     resourceType?: 'index',
     *     retentionPeriod?: string,
     *     type?: 'retention'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
