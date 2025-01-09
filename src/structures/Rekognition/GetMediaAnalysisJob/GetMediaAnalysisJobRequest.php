<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetMediaAnalysisJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetMediaAnalysisJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
