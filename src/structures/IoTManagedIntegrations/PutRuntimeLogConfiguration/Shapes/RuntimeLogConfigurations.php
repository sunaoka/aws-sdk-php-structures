<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutRuntimeLogConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN'|null $LogLevel
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN'|null $LogFlushLevel
 * @property string|null $LocalStoreLocation
 * @property int|null $LocalStoreFileRotationMaxFiles
 * @property int|null $LocalStoreFileRotationMaxBytes
 * @property bool|null $UploadLog
 * @property int|null $UploadPeriodMinutes
 * @property bool|null $DeleteLocalStoreAfterUpload
 */
class RuntimeLogConfigurations extends Shape
{
    /**
     * @param array{
     *     LogLevel?: 'DEBUG'|'ERROR'|'INFO'|'WARN'|null,
     *     LogFlushLevel?: 'DEBUG'|'ERROR'|'INFO'|'WARN'|null,
     *     LocalStoreLocation?: string|null,
     *     LocalStoreFileRotationMaxFiles?: int|null,
     *     LocalStoreFileRotationMaxBytes?: int|null,
     *     UploadLog?: bool|null,
     *     UploadPeriodMinutes?: int|null,
     *     DeleteLocalStoreAfterUpload?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
