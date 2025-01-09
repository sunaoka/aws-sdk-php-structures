<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $detectorId
 */
class DeleteDetectorRequest extends Request
{
    /**
     * @param array{detectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
