<?php

namespace Sunaoka\Aws\Structures\Comprehend\DeleteEntityRecognizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EntityRecognizerArn
 */
class DeleteEntityRecognizerRequest extends Request
{
    /**
     * @param array{EntityRecognizerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
