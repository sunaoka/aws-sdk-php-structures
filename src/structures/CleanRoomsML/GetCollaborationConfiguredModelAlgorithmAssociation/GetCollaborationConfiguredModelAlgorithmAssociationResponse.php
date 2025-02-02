<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property string|null $description
 * @property string $creatorAccountId
 * @property Shapes\PrivacyConfiguration|null $privacyConfiguration
 */
class GetCollaborationConfiguredModelAlgorithmAssociationResponse extends Response
{
}
