<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID'|null $scanMode
 * @property 'SUCCESS'|'PENDING'|null $scanModeStatus
 */
class Ec2ScanModeState extends Shape
{
    /**
     * @param array{
     *     scanMode?: 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID'|null,
     *     scanModeStatus?: 'SUCCESS'|'PENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
