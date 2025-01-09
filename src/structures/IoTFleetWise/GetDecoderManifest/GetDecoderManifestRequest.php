<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetDecoderManifestRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
