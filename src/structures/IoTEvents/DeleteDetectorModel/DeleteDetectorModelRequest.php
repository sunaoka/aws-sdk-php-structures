<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DeleteDetectorModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorModelName
 */
class DeleteDetectorModelRequest extends Request
{
    /**
     * @param array{detectorModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
