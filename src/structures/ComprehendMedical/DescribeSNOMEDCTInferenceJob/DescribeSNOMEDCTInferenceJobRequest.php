<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeSNOMEDCTInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeSNOMEDCTInferenceJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
