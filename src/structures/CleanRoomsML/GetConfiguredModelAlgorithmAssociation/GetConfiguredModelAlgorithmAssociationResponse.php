<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $configuredModelAlgorithmAssociationArn
 * @property string $membershipIdentifier
 * @property string $collaborationIdentifier
 * @property string $configuredModelAlgorithmArn
 * @property string $name
 * @property Shapes\PrivacyConfiguration|null $privacyConfiguration
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class GetConfiguredModelAlgorithmAssociationResponse extends Response
{
}
