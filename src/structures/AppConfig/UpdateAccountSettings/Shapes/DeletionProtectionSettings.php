<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property int<15, 1440> $ProtectionPeriodInMinutes
 */
class DeletionProtectionSettings extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     ProtectionPeriodInMinutes?: int<15, 1440>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
