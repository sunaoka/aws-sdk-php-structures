<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\DeleteProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 */
class DeleteProfileRequest extends Request
{
    /**
     * @param array{ProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
