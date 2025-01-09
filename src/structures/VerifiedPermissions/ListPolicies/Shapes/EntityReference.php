<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $unspecified
 * @property EntityIdentifier $identifier
 */
class EntityReference extends Shape
{
    /**
     * @param array{
     *     unspecified?: bool,
     *     identifier?: EntityIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
