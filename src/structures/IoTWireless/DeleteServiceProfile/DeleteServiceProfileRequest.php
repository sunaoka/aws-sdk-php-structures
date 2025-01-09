<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteServiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteServiceProfileRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
