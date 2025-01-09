<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property Shapes\DatastoreStorage $datastoreStorage
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property list<Shapes\Tag> $tags
 * @property Shapes\FileFormatConfiguration $fileFormatConfiguration
 * @property Shapes\DatastorePartitions $datastorePartitions
 */
class CreateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName: string,
     *     datastoreStorage?: Shapes\DatastoreStorage,
     *     retentionPeriod?: Shapes\RetentionPeriod,
     *     tags?: list<Shapes\Tag>,
     *     fileFormatConfiguration?: Shapes\FileFormatConfiguration,
     *     datastorePartitions?: Shapes\DatastorePartitions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
