<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetInferenceProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $inferenceProfileName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $inferenceProfileArn
 * @property list<Shapes\InferenceProfileModel> $models
 * @property string $inferenceProfileId
 * @property 'ACTIVE' $status
 * @property 'SYSTEM_DEFINED'|'APPLICATION' $type
 */
class GetInferenceProfileResponse extends Response
{
}
