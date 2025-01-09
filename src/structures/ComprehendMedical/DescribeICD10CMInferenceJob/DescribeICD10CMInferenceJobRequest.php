<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeICD10CMInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeICD10CMInferenceJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
