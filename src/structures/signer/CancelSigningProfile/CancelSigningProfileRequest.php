<?php

namespace Sunaoka\Aws\Structures\signer\CancelSigningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 */
class CancelSigningProfileRequest extends Request
{
    /**
     * @param array{profileName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
