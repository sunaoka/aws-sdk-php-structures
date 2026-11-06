<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $description
 */
class GroupMetadata extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
