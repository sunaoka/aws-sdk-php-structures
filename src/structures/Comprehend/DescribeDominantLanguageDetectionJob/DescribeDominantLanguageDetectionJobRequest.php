<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDominantLanguageDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeDominantLanguageDetectionJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
