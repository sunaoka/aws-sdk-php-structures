<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetUploadStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $uploadId
 */
class GetUploadStatusRequest extends Request
{
    /**
     * @param array{uploadId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
