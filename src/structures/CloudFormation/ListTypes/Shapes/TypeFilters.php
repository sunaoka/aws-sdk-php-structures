<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTERED'|'ACTIVATED'|'THIRD_PARTY'|'AWS_TYPES'|null $Category
 * @property string|null $PublisherId
 * @property string|null $TypeNamePrefix
 */
class TypeFilters extends Shape
{
    /**
     * @param array{
     *     Category?: 'REGISTERED'|'ACTIVATED'|'THIRD_PARTY'|'AWS_TYPES'|null,
     *     PublisherId?: string|null,
     *     TypeNamePrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
