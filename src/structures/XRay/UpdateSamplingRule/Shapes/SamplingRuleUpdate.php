<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateSamplingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $RuleARN
 * @property string $ResourceARN
 * @property int $Priority
 * @property double $FixedRate
 * @property int $ReservoirSize
 * @property string $Host
 * @property string $ServiceName
 * @property string $ServiceType
 * @property string $HTTPMethod
 * @property string $URLPath
 * @property array<string, string> $Attributes
 */
class SamplingRuleUpdate extends Shape
{
    /**
     * @param array{
     *     RuleName?: string,
     *     RuleARN?: string,
     *     ResourceARN?: string,
     *     Priority?: int,
     *     FixedRate?: double,
     *     ReservoirSize?: int,
     *     Host?: string,
     *     ServiceName?: string,
     *     ServiceType?: string,
     *     HTTPMethod?: string,
     *     URLPath?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
