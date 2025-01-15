<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>|null $SupportedArchitectures
 * @property double|null $SustainedClockSpeedInGhz
 * @property list<'amd-sev-snp'>|null $SupportedFeatures
 * @property string|null $Manufacturer
 */
class ProcessorInfo extends Shape
{
    /**
     * @param array{
     *     SupportedArchitectures?: list<'i386'|'x86_64'|'arm64'|'x86_64_mac'|'arm64_mac'>|null,
     *     SustainedClockSpeedInGhz?: double|null,
     *     SupportedFeatures?: list<'amd-sev-snp'>|null,
     *     Manufacturer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
