<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableIdentityCenter
 * @property string $IdentityCenterInstanceArn
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableIdentityCenter?: bool,
     *     IdentityCenterInstanceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
