<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $byProvider
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null $byCustomizationType
 * @property 'TEXT'|'IMAGE'|'EMBEDDING'|null $byOutputModality
 * @property 'ON_DEMAND'|'PROVISIONED'|null $byInferenceType
 */
class ListFoundationModelsRequest extends Request
{
    /**
     * @param array{
     *     byProvider?: string|null,
     *     byCustomizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null,
     *     byOutputModality?: 'TEXT'|'IMAGE'|'EMBEDDING'|null,
     *     byInferenceType?: 'ON_DEMAND'|'PROVISIONED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
