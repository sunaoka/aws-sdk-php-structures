<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutApprovalResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $summary
 * @property 'Approved'|'Rejected' $status
 */
class ApprovalResult extends Shape
{
    /**
     * @param array{
     *     summary: string,
     *     status: 'Approved'|'Rejected'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
