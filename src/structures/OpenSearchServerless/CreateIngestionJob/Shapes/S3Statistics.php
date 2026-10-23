<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $objectsDiscovered
 * @property int|null $objectsIngested
 * @property int|null $objectsFailed
 */
class S3Statistics extends Shape
{
    /**
     * @param array{
     *     objectsDiscovered?: int|null,
     *     objectsIngested?: int|null,
     *     objectsFailed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
