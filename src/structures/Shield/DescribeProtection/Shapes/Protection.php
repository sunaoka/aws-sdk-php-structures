<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $ResourceArn
 * @property list<string>|null $HealthCheckIds
 * @property string|null $ProtectionArn
 * @property ApplicationLayerAutomaticResponseConfiguration|null $ApplicationLayerAutomaticResponseConfiguration
 */
class Protection extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     ResourceArn?: string|null,
     *     HealthCheckIds?: list<string>|null,
     *     ProtectionArn?: string|null,
     *     ApplicationLayerAutomaticResponseConfiguration?: ApplicationLayerAutomaticResponseConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
