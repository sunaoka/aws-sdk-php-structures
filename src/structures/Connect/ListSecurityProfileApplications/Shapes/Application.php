<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property list<string> $ApplicationPermissions
 */
class Application extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     ApplicationPermissions?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
