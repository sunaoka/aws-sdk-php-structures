<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property ActorUser|null $User
 * @property ActorSession|null $Session
 */
class Actor extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     User?: ActorUser|null,
     *     Session?: ActorSession|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
