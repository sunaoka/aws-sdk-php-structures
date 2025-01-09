<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTransformJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformJobName
 */
class StopTransformJobRequest extends Request
{
    /**
     * @param array{TransformJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
