<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property Shapes\DatastoreStorage $datastoreStorage
 * @property Shapes\FileFormatConfiguration $fileFormatConfiguration
 */
class UpdateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName: string,
     *     retentionPeriod?: Shapes\RetentionPeriod,
     *     datastoreStorage?: Shapes\DatastoreStorage,
     *     fileFormatConfiguration?: Shapes\FileFormatConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
