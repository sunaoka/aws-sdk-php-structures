<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property list<string> $Groups
 */
class ImpersonatedUser extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Groups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
