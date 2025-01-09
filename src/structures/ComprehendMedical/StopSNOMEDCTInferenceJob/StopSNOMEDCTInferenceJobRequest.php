<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopSNOMEDCTInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopSNOMEDCTInferenceJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
