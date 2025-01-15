<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $baseModelArn
 * @property string $baseModelName
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null $customizationType
 * @property string|null $ownerAccountId
 */
class CustomModelSummary extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     modelName: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     baseModelArn: string,
     *     baseModelName: string,
     *     customizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null,
     *     ownerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
