<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModelAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analysisId
 */
class DescribeDetectorModelAnalysisRequest extends Request
{
    /**
     * @param array{analysisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
