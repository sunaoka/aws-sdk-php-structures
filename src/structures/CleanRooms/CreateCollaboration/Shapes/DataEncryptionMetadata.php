<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowCleartext
 * @property bool $allowDuplicates
 * @property bool $allowJoinsOnColumnsWithDifferentNames
 * @property bool $preserveNulls
 */
class DataEncryptionMetadata extends Shape
{
    /**
     * @param array{
     *     allowCleartext: bool,
     *     allowDuplicates: bool,
     *     allowJoinsOnColumnsWithDifferentNames: bool,
     *     preserveNulls: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
