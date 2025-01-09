<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $CreatedBy
 * @property string $EngagementId
 * @property Shapes\ResourceSnapshotPayload $Payload
 * @property string $ResourceId
 * @property string $ResourceSnapshotTemplateName
 * @property 'Opportunity' $ResourceType
 * @property int<1, max> $Revision
 */
class GetResourceSnapshotResponse extends Response
{
}
