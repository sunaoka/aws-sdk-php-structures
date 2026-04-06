<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Transcript|null $Transcript
 */
class ContactAnalysis extends Shape
{
    /**
     * @param array{Transcript?: Transcript|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
