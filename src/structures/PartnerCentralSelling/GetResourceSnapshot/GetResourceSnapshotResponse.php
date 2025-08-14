<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string|null $Arn
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $EngagementId
 * @property 'Opportunity'|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceSnapshotTemplateName
 * @property int<1, max>|null $Revision
 * @property Shapes\ResourceSnapshotPayload|null $Payload
 */
class GetResourceSnapshotResponse extends Response
{
}
