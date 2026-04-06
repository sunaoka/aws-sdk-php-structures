<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupIdentifier
 * @property string|null $userIdentifier
 */
class Member extends Shape
{
    /**
     * @param array{
     *     groupIdentifier?: string|null,
     *     userIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
