<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\UpdateResourceSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $HostedZoneArn
 * @property string $RecordSetId
 * @property string $RecordType
 * @property TargetResource $TargetResource
 */
class DNSTargetResource extends Shape
{
    /**
     * @param array{
     *     DomainName?: string,
     *     HostedZoneArn?: string,
     *     RecordSetId?: string,
     *     RecordType?: string,
     *     TargetResource?: TargetResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
