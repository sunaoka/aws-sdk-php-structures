<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property int<15, 1440>|null $ProtectionPeriodInMinutes
 */
class DeletionProtectionSettings extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     ProtectionPeriodInMinutes?: int<15, 1440>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
