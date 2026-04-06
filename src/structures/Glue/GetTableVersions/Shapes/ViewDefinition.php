<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsProtected
 * @property string|null $Definer
 * @property list<string>|null $SubObjects
 * @property list<ViewRepresentation>|null $Representations
 */
class ViewDefinition extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool|null,
     *     Definer?: string|null,
     *     SubObjects?: list<string>|null,
     *     Representations?: list<ViewRepresentation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
