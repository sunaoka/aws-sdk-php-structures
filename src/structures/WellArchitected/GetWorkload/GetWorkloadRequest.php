<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetWorkload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 */
class GetWorkloadRequest extends Request
{
    /**
     * @param array{WorkloadId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
