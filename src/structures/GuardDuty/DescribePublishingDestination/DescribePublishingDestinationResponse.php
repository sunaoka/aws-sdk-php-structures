<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DescribePublishingDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DestinationId
 * @property 'S3' $DestinationType
 * @property 'PENDING_VERIFICATION'|'PUBLISHING'|'UNABLE_TO_PUBLISH_FIX_DESTINATION_PROPERTY'|'STOPPED' $Status
 * @property int $PublishingFailureStartTimestamp
 * @property Shapes\DestinationProperties $DestinationProperties
 * @property array<string, string>|null $Tags
 */
class DescribePublishingDestinationResponse extends Response
{
}
