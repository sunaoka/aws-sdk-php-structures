<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cacheType
 * @property list<string> $dbPaths
 * @property string $dataviewName
 */
class KxDatabaseCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     cacheType: string,
     *     dbPaths: list<string>,
     *     dataviewName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
