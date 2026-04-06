<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListInferenceProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inferenceProfileName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
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
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
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
