<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typeIdentifier
 * @property string $typeRevision
 * @property bool|null $required
 */
class FormEntryInput extends Shape
{
    /**
     * @param array{
     *     typeIdentifier: string,
     *     typeRevision: string,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
