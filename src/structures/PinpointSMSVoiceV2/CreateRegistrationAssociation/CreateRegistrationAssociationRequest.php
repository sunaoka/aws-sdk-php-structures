<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property string $ResourceId
 */
class CreateRegistrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
