<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $mlInputChannelArn
 * @property string $name
 * @property list<string> $configuredModelAlgorithmAssociations
 * @property 'CREATE_PENDING'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'ACTIVE'|'DELETE_PENDING'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|'INACTIVE' $status
 * @property Shapes\StatusDetails|null $statusDetails
 * @property int<1, 30> $retentionInDays
 * @property int<0, 100000000000>|null $numberOfRecords
 * @property Shapes\PrivacyBudgets|null $privacyBudgets
 * @property string|null $description
 * @property Shapes\SyntheticDataConfiguration|null $syntheticDataConfiguration
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $creatorAccountId
 */
class GetCollaborationMLInputChannelResponse extends Response
{
}
