<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string $modelId
 * @property string|null $modelName
 * @property string|null $providerName
 * @property list<'TEXT'|'IMAGE'|'EMBEDDING'>|null $inputModalities
 * @property list<'TEXT'|'IMAGE'|'EMBEDDING'>|null $outputModalities
 * @property bool|null $responseStreamingSupported
 * @property list<'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'>|null $customizationsSupported
 * @property list<'ON_DEMAND'|'PROVISIONED'>|null $inferenceTypesSupported
 * @property FoundationModelLifecycle|null $modelLifecycle
 */
class FoundationModelSummary extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     modelId: string,
     *     modelName?: string|null,
     *     providerName?: string|null,
     *     inputModalities?: list<'TEXT'|'IMAGE'|'EMBEDDING'>|null,
     *     outputModalities?: list<'TEXT'|'IMAGE'|'EMBEDDING'>|null,
     *     responseStreamingSupported?: bool|null,
     *     customizationsSupported?: list<'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'>|null,
     *     inferenceTypesSupported?: list<'ON_DEMAND'|'PROVISIONED'>|null,
     *     modelLifecycle?: FoundationModelLifecycle|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
