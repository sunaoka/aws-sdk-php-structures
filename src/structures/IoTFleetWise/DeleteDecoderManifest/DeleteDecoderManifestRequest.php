<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteDecoderManifestRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
