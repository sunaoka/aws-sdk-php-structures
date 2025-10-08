<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Path
 * @property string|null $Sha256
 */
class ActorProcess extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Path: string,
     *     Sha256?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
