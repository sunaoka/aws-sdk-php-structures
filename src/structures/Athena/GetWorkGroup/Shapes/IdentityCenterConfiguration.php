<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableIdentityCenter
 * @property string|null $IdentityCenterInstanceArn
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableIdentityCenter?: bool|null,
     *     IdentityCenterInstanceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
