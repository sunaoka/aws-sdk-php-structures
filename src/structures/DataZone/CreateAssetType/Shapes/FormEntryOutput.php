<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typeName
 * @property string $typeRevision
 * @property bool|null $required
 */
class FormEntryOutput extends Shape
{
    /**
     * @param array{
     *     typeName: string,
     *     typeRevision: string,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
