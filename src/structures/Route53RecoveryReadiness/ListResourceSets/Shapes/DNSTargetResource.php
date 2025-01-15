<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\ListResourceSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $HostedZoneArn
 * @property string|null $RecordSetId
 * @property string|null $RecordType
 * @property TargetResource|null $TargetResource
 */
class DNSTargetResource extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     HostedZoneArn?: string|null,
     *     RecordSetId?: string|null,
     *     RecordType?: string|null,
     *     TargetResource?: TargetResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
