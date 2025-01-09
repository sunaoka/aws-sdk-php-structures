<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID' $scanMode
 * @property 'SUCCESS'|'PENDING' $scanModeStatus
 */
class Ec2ScanModeState extends Shape
{
    /**
     * @param array{
     *     scanMode?: 'EC2_SSM_AGENT_BASED'|'EC2_HYBRID',
     *     scanModeStatus?: 'SUCCESS'|'PENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
