<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectionRuleEksRequirements|null $Eks
 * @property DetectionRuleEc2Requirements|null $Ec2
 * @property DetectionRuleEcsFargateRequirements|null $EcsFargate
 */
class DetectionRuleRuntimePlatforms extends Shape
{
    /**
     * @param array{
     *     Eks?: DetectionRuleEksRequirements|null,
     *     Ec2?: DetectionRuleEc2Requirements|null,
     *     EcsFargate?: DetectionRuleEcsFargateRequirements|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
