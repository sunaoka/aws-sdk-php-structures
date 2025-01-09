<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetModelManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetModelManifestRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
