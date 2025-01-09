<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\StreamProcessingStartSelector $StartSelector
 * @property Shapes\StreamProcessingStopSelector $StopSelector
 */
class StartStreamProcessorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StartSelector?: Shapes\StreamProcessingStartSelector,
     *     StopSelector?: Shapes\StreamProcessingStopSelector
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
