<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string $Catalog
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $CreatedBy
 * @property string|null $EngagementId
 * @property Shapes\ResourceSnapshotPayload|null $Payload
 * @property string|null $ResourceId
 * @property string|null $ResourceSnapshotTemplateName
 * @property 'Opportunity'|null $ResourceType
 * @property int<1, max>|null $Revision
 */
class GetResourceSnapshotResponse extends Response
{
}
