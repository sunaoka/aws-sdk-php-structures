<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopRxNormInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopRxNormInferenceJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
