<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\StopEntitiesDetectionV2Job;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StopEntitiesDetectionV2JobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
