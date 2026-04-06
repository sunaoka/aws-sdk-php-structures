<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDelegateMacVolumeOwnershipTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $MacModificationTaskId
 * @property MacSystemIntegrityProtectionConfiguration|null $MacSystemIntegrityProtectionConfig
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property list<Tag>|null $Tags
 * @property 'successful'|'failed'|'in-progress'|'pending'|null $TaskState
 * @property 'sip-modification'|'volume-ownership-delegation'|null $TaskType
 */
class MacModificationTask extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     MacModificationTaskId?: string|null,
     *     MacSystemIntegrityProtectionConfig?: MacSystemIntegrityProtectionConfiguration|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     TaskState?: 'successful'|'failed'|'in-progress'|'pending'|null,
     *     TaskType?: 'sip-modification'|'volume-ownership-delegation'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
