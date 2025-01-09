<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $creatorAccountId
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $mlInputChannelArn
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property Shapes\StatusDetails $statusDetails
 * @property int $retentionInDays
 * @property int $numberOfRecords
 * @property string $description
 */
class GetCollaborationMLInputChannelResponse extends Response
{
}
