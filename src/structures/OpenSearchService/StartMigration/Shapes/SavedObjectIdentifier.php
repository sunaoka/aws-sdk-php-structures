<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property string $id
 */
class SavedObjectIdentifier extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
