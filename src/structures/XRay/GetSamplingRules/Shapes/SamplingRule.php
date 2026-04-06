<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property string|null $RuleARN
 * @property string $ResourceARN
 * @property int<1, 9999> $Priority
 * @property double $FixedRate
 * @property int<0, max> $ReservoirSize
 * @property string $ServiceName
 * @property string $ServiceType
 * @property string $Host
 * @property string $HTTPMethod
 * @property string $URLPath
 * @property int<1, max> $Version
 * @property array<string, string>|null $Attributes
 * @property SamplingRateBoost|null $SamplingRateBoost
 */
class SamplingRule extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleARN?: string|null,
     *     ResourceARN: string,
     *     Priority: int<1, 9999>,
     *     FixedRate: double,
     *     ReservoirSize: int<0, max>,
     *     ServiceName: string,
     *     ServiceType: string,
     *     Host: string,
     *     HTTPMethod: string,
     *     URLPath: string,
     *     Version: int<1, max>,
     *     Attributes?: array<string, string>|null,
     *     SamplingRateBoost?: SamplingRateBoost|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
