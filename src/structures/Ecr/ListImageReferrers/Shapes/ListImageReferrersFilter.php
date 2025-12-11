<?php

namespace Sunaoka\Aws\Structures\Ecr\ListImageReferrers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $artifactTypes
 * @property 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|'ANY'|null $artifactStatus
 */
class ListImageReferrersFilter extends Shape
{
    /**
     * @param array{
     *     artifactTypes?: list<string>|null,
     *     artifactStatus?: 'ACTIVE'|'ARCHIVED'|'ACTIVATING'|'ANY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
