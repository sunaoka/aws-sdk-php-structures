<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProfileArn
 */
class GetProfileRequest extends Request
{
    /**
     * @param array{ProfileArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
