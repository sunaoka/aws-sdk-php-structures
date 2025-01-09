<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 */
class DeleteDetectorRequest extends Request
{
    /**
     * @param array{DetectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
