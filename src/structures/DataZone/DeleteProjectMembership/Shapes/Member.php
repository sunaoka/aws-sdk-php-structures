<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userIdentifier
 * @property string|null $groupIdentifier
 */
class Member extends Shape
{
    /**
     * @param array{
     *     userIdentifier?: string|null,
     *     groupIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
