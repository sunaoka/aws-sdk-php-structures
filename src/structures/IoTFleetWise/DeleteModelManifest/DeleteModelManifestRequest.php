<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteModelManifestRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
