<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTrainingEntityRecognizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityRecognizerArn
 */
class StopTrainingEntityRecognizerRequest extends Request
{
    /**
     * @param array{EntityRecognizerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
