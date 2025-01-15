<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'ACCESS_DENIED'|null $Type
 * @property string|null $Message
 * @property list<Entity>|null $ViolatedEntities
 */
class TemplateError extends Shape
{
    /**
     * @param array{
     *     Type?: 'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'ACCESS_DENIED'|null,
     *     Message?: string|null,
     *     ViolatedEntities?: list<Entity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
