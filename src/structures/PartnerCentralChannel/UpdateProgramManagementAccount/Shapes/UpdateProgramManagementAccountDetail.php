<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\UpdateProgramManagementAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $revision
 * @property string|null $displayName
 */
class UpdateProgramManagementAccountDetail extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     revision?: string|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
