<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsProtected
 * @property string $Definer
 * @property list<ViewRepresentationInput> $Representations
 * @property list<string> $SubObjects
 */
class ViewDefinitionInput extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool,
     *     Definer?: string,
     *     Representations?: list<ViewRepresentationInput>,
     *     SubObjects?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
