<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateVerifiedDestinationNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationPhoneNumber
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateVerifiedDestinationNumberRequest extends Request
{
    /**
     * @param array{
     *     DestinationPhoneNumber: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
