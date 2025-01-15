<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatastoreId
 * @property string $DatastoreArn
 * @property string|null $DatastoreName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED' $DatastoreStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property 'R4' $DatastoreTypeVersion
 * @property string $DatastoreEndpoint
 * @property SseConfiguration|null $SseConfiguration
 * @property PreloadDataConfig|null $PreloadDataConfig
 * @property IdentityProviderConfiguration|null $IdentityProviderConfiguration
 * @property ErrorCause|null $ErrorCause
 */
class DatastoreProperties extends Shape
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     DatastoreArn: string,
     *     DatastoreName?: string|null,
     *     DatastoreStatus: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|'CREATE_FAILED',
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DatastoreTypeVersion: 'R4',
     *     DatastoreEndpoint: string,
     *     SseConfiguration?: SseConfiguration|null,
     *     PreloadDataConfig?: PreloadDataConfig|null,
     *     IdentityProviderConfiguration?: IdentityProviderConfiguration|null,
     *     ErrorCause?: ErrorCause|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
