<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListFoundationModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string $modelId
 * @property string $modelName
 * @property string $providerName
 * @property list<'TEXT'|'IMAGE'|'EMBEDDING'> $inputModalities
 * @property list<'TEXT'|'IMAGE'|'EMBEDDING'> $outputModalities
 * @property bool $responseStreamingSupported
 * @property list<'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'> $customizationsSupported
 * @property list<'ON_DEMAND'|'PROVISIONED'> $inferenceTypesSupported
 * @property FoundationModelLifecycle $modelLifecycle
 */
class FoundationModelSummary extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     modelId: string,
     *     modelName?: string,
     *     providerName?: string,
     *     inputModalities?: list<'TEXT'|'IMAGE'|'EMBEDDING'>,
     *     outputModalities?: list<'TEXT'|'IMAGE'|'EMBEDDING'>,
     *     responseStreamingSupported?: bool,
     *     customizationsSupported?: list<'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'>,
     *     inferenceTypesSupported?: list<'ON_DEMAND'|'PROVISIONED'>,
     *     modelLifecycle?: FoundationModelLifecycle
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
