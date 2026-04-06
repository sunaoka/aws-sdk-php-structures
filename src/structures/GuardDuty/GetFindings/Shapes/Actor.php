<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property User|null $User
 * @property Session|null $Session
 * @property ActorProcess|null $Process
 */
class Actor extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     User?: User|null,
     *     Session?: Session|null,
     *     Process?: ActorProcess|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
