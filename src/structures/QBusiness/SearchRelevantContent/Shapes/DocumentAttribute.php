<?php

namespace Sunaoka\Aws\Structures\QBusiness\SearchRelevantContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property DocumentAttributeValue $value
 */
class DocumentAttribute extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value: DocumentAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
