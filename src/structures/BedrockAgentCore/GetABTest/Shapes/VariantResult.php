<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $variantName
 * @property int $sampleSize
 * @property double $mean
 * @property double|null $absoluteChange
 * @property double|null $percentChange
 * @property double|null $pValue
 * @property ConfidenceInterval|null $confidenceInterval
 * @property bool $isSignificant
 */
class VariantResult extends Shape
{
    /**
     * @param array{
     *     variantName: string,
     *     sampleSize: int,
     *     mean: double,
     *     absoluteChange?: double|null,
     *     percentChange?: double|null,
     *     pValue?: double|null,
     *     confidenceInterval?: ConfidenceInterval|null,
     *     isSignificant: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
