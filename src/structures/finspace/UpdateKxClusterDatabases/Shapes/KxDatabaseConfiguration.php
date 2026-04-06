<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property list<KxDatabaseCacheConfiguration>|null $cacheConfigurations
 * @property string|null $changesetId
 */
class KxDatabaseConfiguration extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     cacheConfigurations?: list<KxDatabaseCacheConfiguration>|null,
     *     changesetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
