<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string $principal
 * @property string $statementId
 * @property string $profileVersion
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     action?: string,
     *     principal?: string,
     *     statementId?: string,
     *     profileVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
