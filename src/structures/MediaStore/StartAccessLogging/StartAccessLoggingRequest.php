<?php

namespace Sunaoka\Aws\Structures\MediaStore\StartAccessLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContainerName
 */
class StartAccessLoggingRequest extends Request
{
    /**
     * @param array{ContainerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
