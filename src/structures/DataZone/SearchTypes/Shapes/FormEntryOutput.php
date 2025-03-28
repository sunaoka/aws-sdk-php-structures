<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $required
 * @property string $typeName
 * @property string $typeRevision
 */
class FormEntryOutput extends Shape
{
    /**
     * @param array{
     *     required?: bool|null,
     *     typeName: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
