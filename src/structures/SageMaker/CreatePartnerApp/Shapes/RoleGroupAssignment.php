<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleName
 * @property list<string> $GroupPatterns
 */
class RoleGroupAssignment extends Shape
{
    /**
     * @param array{
     *     RoleName: string,
     *     GroupPatterns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
