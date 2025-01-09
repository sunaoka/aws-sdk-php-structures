<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnforceWorkGroupConfiguration
 * @property ResultConfigurationUpdates $ResultConfigurationUpdates
 * @property bool $PublishCloudWatchMetricsEnabled
 * @property int<10000000, max> $BytesScannedCutoffPerQuery
 * @property bool $RemoveBytesScannedCutoffPerQuery
 * @property bool $RequesterPaysEnabled
 * @property EngineVersion $EngineVersion
 * @property bool $RemoveCustomerContentEncryptionConfiguration
 * @property string $AdditionalConfiguration
 * @property string $ExecutionRole
 * @property CustomerContentEncryptionConfiguration $CustomerContentEncryptionConfiguration
 * @property bool $EnableMinimumEncryptionConfiguration
 * @property QueryResultsS3AccessGrantsConfiguration $QueryResultsS3AccessGrantsConfiguration
 */
class WorkGroupConfigurationUpdates extends Shape
{
    /**
     * @param array{
     *     EnforceWorkGroupConfiguration?: bool,
     *     ResultConfigurationUpdates?: ResultConfigurationUpdates,
     *     PublishCloudWatchMetricsEnabled?: bool,
     *     BytesScannedCutoffPerQuery?: int<10000000, max>,
     *     RemoveBytesScannedCutoffPerQuery?: bool,
     *     RequesterPaysEnabled?: bool,
     *     EngineVersion?: EngineVersion,
     *     RemoveCustomerContentEncryptionConfiguration?: bool,
     *     AdditionalConfiguration?: string,
     *     ExecutionRole?: string,
     *     CustomerContentEncryptionConfiguration?: CustomerContentEncryptionConfiguration,
     *     EnableMinimumEncryptionConfiguration?: bool,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
