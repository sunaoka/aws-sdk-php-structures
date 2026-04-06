<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associatedResourceName
 */
class FeedAssociation extends Shape
{
    /**
     * @param array{associatedResourceName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
