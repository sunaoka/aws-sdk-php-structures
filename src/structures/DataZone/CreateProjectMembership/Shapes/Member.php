<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupIdentifier
 * @property string $userIdentifier
 */
class Member extends Shape
{
    /**
     * @param array{
     *     groupIdentifier?: string,
     *     userIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
