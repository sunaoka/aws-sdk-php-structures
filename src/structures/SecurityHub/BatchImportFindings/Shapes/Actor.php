<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property ActorUser $User
 * @property ActorSession $Session
 */
class Actor extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     User?: ActorUser,
     *     Session?: ActorSession
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
