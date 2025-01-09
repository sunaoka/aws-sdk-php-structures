<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inferenceProfileName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $inferenceProfileArn
 * @property list<InferenceProfileModel> $models
 * @property string $inferenceProfileId
 * @property 'ACTIVE' $status
 * @property 'SYSTEM_DEFINED'|'APPLICATION' $type
 */
class InferenceProfileSummary extends Shape
{
    /**
     * @param array{
     *     inferenceProfileName: string,
     *     description?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     inferenceProfileArn: string,
     *     models: list<InferenceProfileModel>,
     *     inferenceProfileId: string,
     *     status: 'ACTIVE',
     *     type: 'SYSTEM_DEFINED'|'APPLICATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
