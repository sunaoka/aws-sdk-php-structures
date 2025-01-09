<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchInferenceJobArn
 */
class DescribeBatchInferenceJobRequest extends Request
{
    /**
     * @param array{batchInferenceJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
