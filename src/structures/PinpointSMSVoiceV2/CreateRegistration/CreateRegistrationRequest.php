<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationType
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateRegistrationRequest extends Request
{
    /**
     * @param array{
     *     RegistrationType: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
