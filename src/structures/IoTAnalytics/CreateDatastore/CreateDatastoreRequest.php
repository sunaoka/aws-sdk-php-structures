<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property Shapes\DatastoreStorage|null $datastoreStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\FileFormatConfiguration|null $fileFormatConfiguration
 * @property Shapes\DatastorePartitions|null $datastorePartitions
 */
class CreateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName: string,
     *     datastoreStorage?: Shapes\DatastoreStorage|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null,
     *     tags?: list<Shapes\Tag>|null,
     *     fileFormatConfiguration?: Shapes\FileFormatConfiguration|null,
     *     datastorePartitions?: Shapes\DatastorePartitions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
