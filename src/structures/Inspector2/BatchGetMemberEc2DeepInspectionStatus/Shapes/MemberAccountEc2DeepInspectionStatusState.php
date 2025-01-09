<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $errorMessage
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED' $status
 */
class MemberAccountEc2DeepInspectionStatusState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     errorMessage?: string,
     *     status?: 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
