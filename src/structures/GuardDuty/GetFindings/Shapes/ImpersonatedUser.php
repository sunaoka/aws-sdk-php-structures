<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property list<string>|null $Groups
 */
class ImpersonatedUser extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Groups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
