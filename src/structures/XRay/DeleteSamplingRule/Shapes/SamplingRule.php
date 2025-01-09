<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteSamplingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property string $RuleARN
 * @property string $ResourceARN
 * @property int $Priority
 * @property double $FixedRate
 * @property int $ReservoirSize
 * @property string $ServiceName
 * @property string $ServiceType
 * @property string $Host
 * @property string $HTTPMethod
 * @property string $URLPath
 * @property int $Version
 * @property array<string, string> $Attributes
 */
class SamplingRule extends Shape
{
    /**
     * @param array{
     *     RuleName?: string,
     *     RuleARN?: string,
     *     ResourceARN: string,
     *     Priority: int,
     *     FixedRate: double,
     *     ReservoirSize: int,
     *     ServiceName: string,
     *     ServiceType: string,
     *     Host: string,
     *     HTTPMethod: string,
     *     URLPath: string,
     *     Version: int,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
