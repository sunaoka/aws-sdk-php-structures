<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $ResourceArn
 * @property list<string> $HealthCheckIds
 * @property string $ProtectionArn
 * @property ApplicationLayerAutomaticResponseConfiguration $ApplicationLayerAutomaticResponseConfiguration
 */
class Protection extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     ResourceArn?: string,
     *     HealthCheckIds?: list<string>,
     *     ProtectionArn?: string,
     *     ApplicationLayerAutomaticResponseConfiguration?: ApplicationLayerAutomaticResponseConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
