<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeKeyPhrasesDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeKeyPhrasesDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
