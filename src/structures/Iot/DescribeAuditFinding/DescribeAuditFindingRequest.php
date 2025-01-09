<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 */
class DescribeAuditFindingRequest extends Request
{
    /**
     * @param array{findingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
