<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Resource
 */
class AssociationListing extends Shape
{
    /**
     * @param array{Resource: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
