<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property list<KxDatabaseCacheConfiguration>|null $cacheConfigurations
 * @property string|null $changesetId
 * @property string|null $dataviewName
 * @property KxDataviewConfiguration|null $dataviewConfiguration
 */
class KxDatabaseConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     cacheConfigurations?: list<KxDatabaseCacheConfiguration>|null,
     *     changesetId?: string|null,
     *     dataviewName?: string|null,
     *     dataviewConfiguration?: KxDataviewConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
