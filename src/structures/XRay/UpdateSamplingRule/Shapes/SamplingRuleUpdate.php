<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateSamplingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleName
 * @property string|null $RuleARN
 * @property string|null $ResourceARN
 * @property int|null $Priority
 * @property double|null $FixedRate
 * @property int|null $ReservoirSize
 * @property string|null $Host
 * @property string|null $ServiceName
 * @property string|null $ServiceType
 * @property string|null $HTTPMethod
 * @property string|null $URLPath
 * @property array<string, string>|null $Attributes
 */
class SamplingRuleUpdate extends Shape
{
    /**
     * @param array{
     *     RuleName?: string|null,
     *     RuleARN?: string|null,
     *     ResourceARN?: string|null,
     *     Priority?: int|null,
     *     FixedRate?: double|null,
     *     ReservoirSize?: int|null,
     *     Host?: string|null,
     *     ServiceName?: string|null,
     *     ServiceType?: string|null,
     *     HTTPMethod?: string|null,
     *     URLPath?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
