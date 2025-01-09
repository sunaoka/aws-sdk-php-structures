<?php

namespace Sunaoka\Aws\Structures\Route53\ListResourceRecordSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostedZoneId
 * @property string $DNSName
 * @property bool $EvaluateTargetHealth
 */
class AliasTarget extends Shape
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     DNSName: string,
     *     EvaluateTargetHealth: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
