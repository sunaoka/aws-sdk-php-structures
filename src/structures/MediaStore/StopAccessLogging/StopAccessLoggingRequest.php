<?php

namespace Sunaoka\Aws\Structures\MediaStore\StopAccessLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class StopAccessLoggingRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
