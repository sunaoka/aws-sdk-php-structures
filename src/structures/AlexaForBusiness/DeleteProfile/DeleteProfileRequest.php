<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProfileArn
 */
class DeleteProfileRequest extends Request
{
    /**
     * @param array{ProfileArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
