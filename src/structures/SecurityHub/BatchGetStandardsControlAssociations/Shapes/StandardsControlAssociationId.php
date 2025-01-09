<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetStandardsControlAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityControlId
 * @property string $StandardsArn
 */
class StandardsControlAssociationId extends Shape
{
    /**
     * @param array{
     *     SecurityControlId: string,
     *     StandardsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
