<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchDeleteDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeleteDetectorRequest> $detectors
 */
class BatchDeleteDetectorRequest extends Request
{
    /**
     * @param array{detectors: list<Shapes\DeleteDetectorRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
