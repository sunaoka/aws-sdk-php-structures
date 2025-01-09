<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateVerifiedDestinationNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class CreateVerifiedDestinationNumberRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
