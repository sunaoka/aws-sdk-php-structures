<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'> $SupportedArchitectures
 * @property double $SustainedClockSpeedInGhz
 * @property list<'amd-sev-snp'> $SupportedFeatures
 * @property string $Manufacturer
 */
class ProcessorInfo extends Shape
{
    /**
     * @param array{
     *     SupportedArchitectures?: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>,
     *     SustainedClockSpeedInGhz?: double,
     *     SupportedFeatures?: list<'amd-sev-snp'>,
     *     Manufacturer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
