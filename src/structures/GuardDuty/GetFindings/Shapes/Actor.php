<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property User $User
 * @property Session $Session
 */
class Actor extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     User?: User,
     *     Session?: Session
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
