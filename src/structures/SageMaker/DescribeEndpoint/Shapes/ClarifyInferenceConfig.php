<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FeaturesAttribute
 * @property string|null $ContentTemplate
 * @property int<1, max>|null $MaxRecordCount
 * @property int<1, 25>|null $MaxPayloadInMB
 * @property int<0, max>|null $ProbabilityIndex
 * @property int<0, max>|null $LabelIndex
 * @property string|null $ProbabilityAttribute
 * @property string|null $LabelAttribute
 * @property list<string>|null $LabelHeaders
 * @property list<string>|null $FeatureHeaders
 * @property list<'numerical'|'categorical'|'text'>|null $FeatureTypes
 */
class ClarifyInferenceConfig extends Shape
{
    /**
     * @param array{
     *     FeaturesAttribute?: string|null,
     *     ContentTemplate?: string|null,
     *     MaxRecordCount?: int<1, max>|null,
     *     MaxPayloadInMB?: int<1, 25>|null,
     *     ProbabilityIndex?: int<0, max>|null,
     *     LabelIndex?: int<0, max>|null,
     *     ProbabilityAttribute?: string|null,
     *     LabelAttribute?: string|null,
     *     LabelHeaders?: list<string>|null,
     *     FeatureHeaders?: list<string>|null,
     *     FeatureTypes?: list<'numerical'|'categorical'|'text'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
