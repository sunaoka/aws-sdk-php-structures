<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class GetDetectorRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
