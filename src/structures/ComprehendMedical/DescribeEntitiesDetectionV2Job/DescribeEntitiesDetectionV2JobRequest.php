<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DescribeEntitiesDetectionV2Job;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class DescribeEntitiesDetectionV2JobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
