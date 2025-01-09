<?php

namespace Sunaoka\Aws\Structures\Rekognition\StopStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StopStreamProcessorRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
