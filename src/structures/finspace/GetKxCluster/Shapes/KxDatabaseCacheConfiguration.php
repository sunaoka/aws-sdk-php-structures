<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cacheType
 * @property list<string> $dbPaths
 * @property string|null $dataviewName
 */
class KxDatabaseCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     cacheType: string,
     *     dbPaths: list<string>,
     *     dataviewName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
