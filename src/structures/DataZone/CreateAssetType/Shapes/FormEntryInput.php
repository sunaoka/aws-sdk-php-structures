<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $required
 * @property string $typeIdentifier
 * @property string $typeRevision
 */
class FormEntryInput extends Shape
{
    /**
     * @param array{
     *     required?: bool|null,
     *     typeIdentifier: string,
     *     typeRevision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
