<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\BatchUpdateDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UpdateDetectorRequest> $detectors
 */
class BatchUpdateDetectorRequest extends Request
{
    /**
     * @param array{detectors: list<Shapes\UpdateDetectorRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
