<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGISTERED'|'ACTIVATED'|'THIRD_PARTY'|'AWS_TYPES' $Category
 * @property string $PublisherId
 * @property string $TypeNamePrefix
 */
class TypeFilters extends Shape
{
    /**
     * @param array{
     *     Category?: 'REGISTERED'|'ACTIVATED'|'THIRD_PARTY'|'AWS_TYPES',
     *     PublisherId?: string,
     *     TypeNamePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
