<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'|null $status
 * @property string|null $errorMessage
 */
class MemberAccountEc2DeepInspectionStatusState extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     status?: 'ACTIVATED'|'DEACTIVATED'|'PENDING'|'FAILED'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
