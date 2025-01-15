<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartStreamProcessor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\StreamProcessingStartSelector|null $StartSelector
 * @property Shapes\StreamProcessingStopSelector|null $StopSelector
 */
class StartStreamProcessorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     StartSelector?: Shapes\StreamProcessingStartSelector|null,
     *     StopSelector?: Shapes\StreamProcessingStopSelector|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
