<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsProtected
 * @property string $Definer
 * @property list<string> $SubObjects
 * @property list<ViewRepresentation> $Representations
 */
class ViewDefinition extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool,
     *     Definer?: string,
     *     SubObjects?: list<string>,
     *     Representations?: list<ViewRepresentation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
