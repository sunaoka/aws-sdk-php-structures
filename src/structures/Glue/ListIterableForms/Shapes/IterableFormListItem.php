<?php

namespace Sunaoka\Aws\Structures\Glue\ListIterableForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ItemId
 * @property string|null $ItemName
 * @property string|null $Description
 * @property list<string>|null $GlossaryTerms
 */
class IterableFormListItem extends Shape
{
    /**
     * @param array{
     *     ItemId?: string|null,
     *     ItemName?: string|null,
     *     Description?: string|null,
     *     GlossaryTerms?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
