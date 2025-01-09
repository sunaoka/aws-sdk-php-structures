<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredAudienceModelArn
 * @property string $name
 * @property string $audienceModelArn
 * @property Shapes\ConfiguredAudienceModelOutputConfig $outputConfig
 * @property string $description
 * @property 'ACTIVE' $status
 * @property list<'ALL'|'NONE'> $sharedAudienceMetrics
 * @property int<25, 500000> $minMatchingSeedSize
 * @property Shapes\AudienceSizeConfig $audienceSizeConfig
 * @property array<string, string> $tags
 * @property 'FROM_PARENT_RESOURCE'|'NONE' $childResourceTagOnCreatePolicy
 */
class GetConfiguredAudienceModelResponse extends Response
{
}
