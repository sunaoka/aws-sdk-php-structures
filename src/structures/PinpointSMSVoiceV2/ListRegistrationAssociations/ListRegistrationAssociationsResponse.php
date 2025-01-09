<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property list<Shapes\RegistrationAssociationMetadata> $RegistrationAssociations
 * @property string $NextToken
 */
class ListRegistrationAssociationsResponse extends Response
{
}
