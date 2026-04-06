<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeEffectivePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY' $PolicyType
 * @property string|null $TargetId
 */
class DescribeEffectivePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyType: 'TAG_POLICY'|'BACKUP_POLICY'|'AISERVICES_OPT_OUT_POLICY',
     *     TargetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
