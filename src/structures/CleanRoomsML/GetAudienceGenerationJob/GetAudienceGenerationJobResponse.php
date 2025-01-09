<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $audienceGenerationJobArn
 * @property string $name
 * @property string $description
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $status
 * @property Shapes\StatusDetails $statusDetails
 * @property string $configuredAudienceModelArn
 * @property Shapes\AudienceGenerationJobDataSource $seedAudience
 * @property bool $includeSeedInOutput
 * @property string $collaborationId
 * @property Shapes\AudienceQualityMetrics $metrics
 * @property string $startedBy
 * @property array<string, string> $tags
 * @property string $protectedQueryIdentifier
 */
class GetAudienceGenerationJobResponse extends Response
{
}
