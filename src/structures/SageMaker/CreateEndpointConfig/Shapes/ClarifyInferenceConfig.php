<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FeaturesAttribute
 * @property string $ContentTemplate
 * @property int $MaxRecordCount
 * @property int $MaxPayloadInMB
 * @property int $ProbabilityIndex
 * @property int $LabelIndex
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
     *     MaxRecordCount?: int,
     *     MaxPayloadInMB?: int,
     *     ProbabilityIndex?: int,
     *     LabelIndex?: int,
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
