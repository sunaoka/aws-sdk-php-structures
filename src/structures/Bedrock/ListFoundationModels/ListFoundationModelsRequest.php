<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $byProvider
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION' $byCustomizationType
 * @property 'TEXT'|'IMAGE'|'EMBEDDING' $byOutputModality
 * @property 'ON_DEMAND'|'PROVISIONED' $byInferenceType
 */
class ListFoundationModelsRequest extends Request
{
    /**
     * @param array{
     *     byProvider?: string,
     *     byCustomizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION',
     *     byOutputModality?: 'TEXT'|'IMAGE'|'EMBEDDING',
     *     byInferenceType?: 'ON_DEMAND'|'PROVISIONED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
