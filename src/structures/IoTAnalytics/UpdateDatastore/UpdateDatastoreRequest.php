<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property Shapes\DatastoreStorage|null $datastoreStorage
 * @property Shapes\FileFormatConfiguration|null $fileFormatConfiguration
 */
class UpdateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName: string,
     *     retentionPeriod?: Shapes\RetentionPeriod|null,
     *     datastoreStorage?: Shapes\DatastoreStorage|null,
     *     fileFormatConfiguration?: Shapes\FileFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
