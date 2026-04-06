<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cacheType
 * @property list<string> $dbPaths
 */
class KxDatabaseCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     cacheType: string,
     *     dbPaths: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
