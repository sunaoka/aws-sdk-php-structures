<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateRegistrationRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
