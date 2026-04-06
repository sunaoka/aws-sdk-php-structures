<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteVerifiedDestinationNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedDestinationNumberId
 */
class DeleteVerifiedDestinationNumberRequest extends Request
{
    /**
     * @param array{VerifiedDestinationNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
