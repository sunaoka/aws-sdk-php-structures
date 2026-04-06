<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RegistrationArn
 * @property string $RegistrationId
 * @property string $RegistrationType
 * @property list<Shapes\RegistrationAssociationMetadata> $RegistrationAssociations
 * @property string|null $NextToken
 */
class ListRegistrationAssociationsResponse extends Response
{
}
