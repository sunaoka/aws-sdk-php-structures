<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteStreamProcessorRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
