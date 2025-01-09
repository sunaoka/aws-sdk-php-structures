<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property list<KxDatabaseCacheConfiguration> $cacheConfigurations
 * @property string $changesetId
 * @property string $dataviewName
 * @property KxDataviewConfiguration $dataviewConfiguration
 */
class KxDatabaseConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     cacheConfigurations?: list<KxDatabaseCacheConfiguration>,
     *     changesetId?: string,
     *     dataviewName?: string,
     *     dataviewConfiguration?: KxDataviewConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
