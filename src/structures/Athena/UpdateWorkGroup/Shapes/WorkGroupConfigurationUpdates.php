<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnforceWorkGroupConfiguration
 * @property ResultConfigurationUpdates|null $ResultConfigurationUpdates
 * @property ManagedQueryResultsConfigurationUpdates|null $ManagedQueryResultsConfigurationUpdates
 * @property bool|null $PublishCloudWatchMetricsEnabled
 * @property int<10000000, max>|null $BytesScannedCutoffPerQuery
 * @property bool|null $RemoveBytesScannedCutoffPerQuery
 * @property bool|null $RequesterPaysEnabled
 * @property EngineVersion|null $EngineVersion
 * @property bool|null $RemoveCustomerContentEncryptionConfiguration
 * @property string|null $AdditionalConfiguration
 * @property string|null $ExecutionRole
 * @property CustomerContentEncryptionConfiguration|null $CustomerContentEncryptionConfiguration
 * @property bool|null $EnableMinimumEncryptionConfiguration
 * @property QueryResultsS3AccessGrantsConfiguration|null $QueryResultsS3AccessGrantsConfiguration
 */
class WorkGroupConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     EnforceWorkGroupConfiguration?: bool|null,
     *     ResultConfigurationUpdates?: ResultConfigurationUpdates|null,
     *     ManagedQueryResultsConfigurationUpdates?: ManagedQueryResultsConfigurationUpdates|null,
     *     PublishCloudWatchMetricsEnabled?: bool|null,
     *     BytesScannedCutoffPerQuery?: int<10000000, max>|null,
     *     RemoveBytesScannedCutoffPerQuery?: bool|null,
     *     RequesterPaysEnabled?: bool|null,
     *     EngineVersion?: EngineVersion|null,
     *     RemoveCustomerContentEncryptionConfiguration?: bool|null,
     *     AdditionalConfiguration?: string|null,
     *     ExecutionRole?: string|null,
     *     CustomerContentEncryptionConfiguration?: CustomerContentEncryptionConfiguration|null,
     *     EnableMinimumEncryptionConfiguration?: bool|null,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
