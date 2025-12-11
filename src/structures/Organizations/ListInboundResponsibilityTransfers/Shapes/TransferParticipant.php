<?php

namespace Sunaoka\Aws\Structures\Organizations\ListInboundResponsibilityTransfers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagementAccountId
 * @property string|null $ManagementAccountEmail
 */
class TransferParticipant extends Shape
{
    /**
     * @param array{
     *     ManagementAccountId?: string|null,
     *     ManagementAccountEmail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
