<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apexVersion
 * @property string|null $ordsVersion
 */
class AutonomousDatabaseApex extends Shape
{
    /**
     * @param array{
     *     apexVersion?: string|null,
     *     ordsVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
