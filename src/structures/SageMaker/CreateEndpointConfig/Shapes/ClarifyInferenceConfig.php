<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeaturesAttribute
 * @property string $ContentTemplate
 * @property int<1, max> $MaxRecordCount
 * @property int<1, 25> $MaxPayloadInMB
 * @property int<0, max> $ProbabilityIndex
 * @property int<0, max> $LabelIndex
 * @property string $ProbabilityAttribute
 * @property string $LabelAttribute
 * @property list<string> $LabelHeaders
 * @property list<string> $FeatureHeaders
 * @property list<'numerical'|'categorical'|'text'> $FeatureTypes
 */
class ClarifyInferenceConfig extends Shape
{
    /**
     * @param array{
     *     FeaturesAttribute?: string,
     *     ContentTemplate?: string,
     *     MaxRecordCount?: int<1, max>,
     *     MaxPayloadInMB?: int<1, 25>,
     *     ProbabilityIndex?: int<0, max>,
     *     LabelIndex?: int<0, max>,
     *     ProbabilityAttribute?: string,
     *     LabelAttribute?: string,
     *     LabelHeaders?: list<string>,
     *     FeatureHeaders?: list<string>,
     *     FeatureTypes?: list<'numerical'|'categorical'|'text'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
