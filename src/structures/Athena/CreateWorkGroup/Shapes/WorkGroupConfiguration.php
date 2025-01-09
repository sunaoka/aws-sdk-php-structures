<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultConfiguration $ResultConfiguration
 * @property bool $EnforceWorkGroupConfiguration
 * @property bool $PublishCloudWatchMetricsEnabled
 * @property int<10000000, max> $BytesScannedCutoffPerQuery
 * @property bool $RequesterPaysEnabled
 * @property EngineVersion $EngineVersion
 * @property string $AdditionalConfiguration
 * @property string $ExecutionRole
 * @property CustomerContentEncryptionConfiguration $CustomerContentEncryptionConfiguration
 * @property bool $EnableMinimumEncryptionConfiguration
 * @property IdentityCenterConfiguration $IdentityCenterConfiguration
 * @property QueryResultsS3AccessGrantsConfiguration $QueryResultsS3AccessGrantsConfiguration
 */
class WorkGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     ResultConfiguration?: ResultConfiguration,
     *     EnforceWorkGroupConfiguration?: bool,
     *     PublishCloudWatchMetricsEnabled?: bool,
     *     BytesScannedCutoffPerQuery?: int<10000000, max>,
     *     RequesterPaysEnabled?: bool,
     *     EngineVersion?: EngineVersion,
     *     AdditionalConfiguration?: string,
     *     ExecutionRole?: string,
     *     CustomerContentEncryptionConfiguration?: CustomerContentEncryptionConfiguration,
     *     EnableMinimumEncryptionConfiguration?: bool,
     *     IdentityCenterConfiguration?: IdentityCenterConfiguration,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
