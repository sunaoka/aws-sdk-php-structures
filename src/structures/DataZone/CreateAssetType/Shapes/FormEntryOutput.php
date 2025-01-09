<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $required
 * @property string $typeName
 * @property string $typeRevision
 */
class FormEntryOutput extends Shape
{
    /**
     * @param array{
     *     required?: bool,
     *     typeName: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
