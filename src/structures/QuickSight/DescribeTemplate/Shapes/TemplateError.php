<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'ACCESS_DENIED' $Type
 * @property string $Message
 * @property list<Entity> $ViolatedEntities
 */
class TemplateError extends Shape
{
    /**
     * @param array{
     *     Type?: 'SOURCE_NOT_FOUND'|'DATA_SET_NOT_FOUND'|'INTERNAL_FAILURE'|'ACCESS_DENIED',
     *     Message?: string,
     *     ViolatedEntities?: list<Entity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
