<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DetectorModelDefinition $detectorModelDefinition
 */
class StartDetectorModelAnalysisRequest extends Request
{
    /**
     * @param array{detectorModelDefinition: Shapes\DetectorModelDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
