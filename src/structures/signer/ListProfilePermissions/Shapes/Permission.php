<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $action
 * @property string|null $principal
 * @property string|null $statementId
 * @property string|null $profileVersion
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     action?: string|null,
     *     principal?: string|null,
     *     statementId?: string|null,
     *     profileVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
