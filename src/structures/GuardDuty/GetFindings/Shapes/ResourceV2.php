<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Uid
 * @property string $Name
 * @property string $AccountId
 * @property 'EC2_INSTANCE'|'EC2_NETWORK_INTERFACE'|'S3_BUCKET'|'S3_OBJECT'|'ACCESS_KEY' $ResourceType
 * @property string $Region
 * @property string $Service
 * @property string $CloudPartition
 * @property list<Tag> $Tags
 * @property ResourceData $Data
 */
class ResourceV2 extends Shape
{
    /**
     * @param array{
     *     Uid: string,
     *     Name?: string,
     *     AccountId?: string,
     *     ResourceType: 'EC2_INSTANCE'|'EC2_NETWORK_INTERFACE'|'S3_BUCKET'|'S3_OBJECT'|'ACCESS_KEY',
     *     Region?: string,
     *     Service?: string,
     *     CloudPartition?: string,
     *     Tags?: list<Tag>,
     *     Data?: ResourceData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
