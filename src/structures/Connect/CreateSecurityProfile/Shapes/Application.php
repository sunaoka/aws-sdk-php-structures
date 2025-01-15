<?php

namespace Sunaoka\Aws\Structures\Connect\CreateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property list<string>|null $ApplicationPermissions
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     ApplicationPermissions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
