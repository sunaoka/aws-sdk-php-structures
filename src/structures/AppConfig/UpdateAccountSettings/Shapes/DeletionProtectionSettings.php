<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int $ProtectionPeriodInMinutes
 */
class DeletionProtectionSettings extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     ProtectionPeriodInMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
