<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultConfiguration|null $ResultConfiguration
 * @property bool|null $EnforceWorkGroupConfiguration
 * @property bool|null $PublishCloudWatchMetricsEnabled
 * @property int<10000000, max>|null $BytesScannedCutoffPerQuery
 * @property bool|null $RequesterPaysEnabled
 * @property EngineVersion|null $EngineVersion
 * @property string|null $AdditionalConfiguration
 * @property string|null $ExecutionRole
 * @property CustomerContentEncryptionConfiguration|null $CustomerContentEncryptionConfiguration
 * @property bool|null $EnableMinimumEncryptionConfiguration
 * @property IdentityCenterConfiguration|null $IdentityCenterConfiguration
 * @property QueryResultsS3AccessGrantsConfiguration|null $QueryResultsS3AccessGrantsConfiguration
 */
class WorkGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     ResultConfiguration?: ResultConfiguration|null,
     *     EnforceWorkGroupConfiguration?: bool|null,
     *     PublishCloudWatchMetricsEnabled?: bool|null,
     *     BytesScannedCutoffPerQuery?: int<10000000, max>|null,
     *     RequesterPaysEnabled?: bool|null,
     *     EngineVersion?: EngineVersion|null,
     *     AdditionalConfiguration?: string|null,
     *     ExecutionRole?: string|null,
     *     CustomerContentEncryptionConfiguration?: CustomerContentEncryptionConfiguration|null,
     *     EnableMinimumEncryptionConfiguration?: bool|null,
     *     IdentityCenterConfiguration?: IdentityCenterConfiguration|null,
     *     QueryResultsS3AccessGrantsConfiguration?: QueryResultsS3AccessGrantsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
