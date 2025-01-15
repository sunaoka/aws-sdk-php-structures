<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptionGroupName
 * @property string|null $Status
 */
class OptionGroupMembership extends Shape
{
    /**
     * @param array{
     *     OptionGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
