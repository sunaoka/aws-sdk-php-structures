<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $audienceGenerationJobArn
 * @property string $name
 * @property string|null $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property Shapes\StatusDetails|null $statusDetails
 * @property string $configuredAudienceModelArn
 * @property Shapes\AudienceGenerationJobDataSource|null $seedAudience
 * @property bool|null $includeSeedInOutput
 * @property string|null $collaborationId
 * @property Shapes\AudienceQualityMetrics|null $metrics
 * @property string|null $startedBy
 * @property array<string, string>|null $tags
 * @property string|null $protectedQueryIdentifier
 */
class GetAudienceGenerationJobResponse extends Response
{
}
