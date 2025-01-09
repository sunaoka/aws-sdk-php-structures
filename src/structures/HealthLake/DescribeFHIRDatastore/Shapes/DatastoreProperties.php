<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatastoreId
 * @property string $DatastoreArn
 * @property string $DatastoreName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED' $DatastoreStatus
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property 'R4' $DatastoreTypeVersion
 * @property string $DatastoreEndpoint
 * @property SseConfiguration $SseConfiguration
 * @property PreloadDataConfig $PreloadDataConfig
 * @property IdentityProviderConfiguration $IdentityProviderConfiguration
 * @property ErrorCause $ErrorCause
 */
class DatastoreProperties extends Shape
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     DatastoreArn: string,
     *     DatastoreName?: string,
     *     DatastoreStatus: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DatastoreTypeVersion: 'R4',
     *     DatastoreEndpoint: string,
     *     SseConfiguration?: SseConfiguration,
     *     PreloadDataConfig?: PreloadDataConfig,
     *     IdentityProviderConfiguration?: IdentityProviderConfiguration,
     *     ErrorCause?: ErrorCause
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
