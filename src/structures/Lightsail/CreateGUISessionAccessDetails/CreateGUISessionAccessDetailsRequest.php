<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateGUISessionAccessDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceName
 */
class CreateGUISessionAccessDetailsRequest extends Request
{
    /**
     * @param array{resourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
