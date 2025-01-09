<?php

namespace Sunaoka\Aws\Structures\Panorama\RemoveApplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationInstanceId
 */
class RemoveApplicationInstanceRequest extends Request
{
    /**
     * @param array{ApplicationInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
