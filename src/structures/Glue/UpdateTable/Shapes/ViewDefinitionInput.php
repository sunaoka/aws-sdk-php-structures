<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsProtected
 * @property string|null $Definer
 * @property list<ViewRepresentationInput>|null $Representations
 * @property list<string>|null $SubObjects
 */
class ViewDefinitionInput extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool|null,
     *     Definer?: string|null,
     *     Representations?: list<ViewRepresentationInput>|null,
     *     SubObjects?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
