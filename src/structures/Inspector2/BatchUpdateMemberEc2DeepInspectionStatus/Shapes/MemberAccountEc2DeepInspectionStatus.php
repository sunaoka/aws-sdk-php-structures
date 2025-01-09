<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchUpdateMemberEc2DeepInspectionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property bool $activateDeepInspection
 */
class MemberAccountEc2DeepInspectionStatus extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     activateDeepInspection: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
