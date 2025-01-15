<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $environmentId
 * @property string|null $awsAccountId
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED'|null $status
 * @property 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED'|null $tgwStatus
 * @property 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED'|null $dnsStatus
 * @property string|null $errorMessage
 * @property string|null $description
 * @property string|null $environmentArn
 * @property string|null $kmsKeyId
 * @property string|null $dedicatedServiceAccountId
 * @property TransitGatewayConfiguration|null $transitGatewayConfiguration
 * @property list<CustomDNSServer>|null $customDNSConfiguration
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property \Aws\Api\DateTimeResult|null $updateTimestamp
 * @property list<string>|null $availabilityZoneIds
 * @property string|null $certificateAuthorityArn
 */
class KxEnvironment extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     environmentId?: string|null,
     *     awsAccountId?: string|null,
     *     status?: 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED'|null,
     *     tgwStatus?: 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED'|null,
     *     dnsStatus?: 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED'|null,
     *     errorMessage?: string|null,
     *     description?: string|null,
     *     environmentArn?: string|null,
     *     kmsKeyId?: string|null,
     *     dedicatedServiceAccountId?: string|null,
     *     transitGatewayConfiguration?: TransitGatewayConfiguration|null,
     *     customDNSConfiguration?: list<CustomDNSServer>|null,
     *     creationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     updateTimestamp?: \Aws\Api\DateTimeResult|null,
     *     availabilityZoneIds?: list<string>|null,
     *     certificateAuthorityArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
