<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $environmentId
 * @property string $awsAccountId
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED' $status
 * @property 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED' $tgwStatus
 * @property 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED' $dnsStatus
 * @property string $errorMessage
 * @property string $description
 * @property string $environmentArn
 * @property string $kmsKeyId
 * @property string $dedicatedServiceAccountId
 * @property TransitGatewayConfiguration $transitGatewayConfiguration
 * @property list<CustomDNSServer> $customDNSConfiguration
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $updateTimestamp
 * @property list<string> $availabilityZoneIds
 * @property string $certificateAuthorityArn
 */
class KxEnvironment extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     environmentId?: string,
     *     awsAccountId?: string,
     *     status?: 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED',
     *     tgwStatus?: 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED',
     *     dnsStatus?: 'NONE'|'UPDATE_REQUESTED'|'UPDATING'|'FAILED_UPDATE'|'SUCCESSFULLY_UPDATED',
     *     errorMessage?: string,
     *     description?: string,
     *     environmentArn?: string,
     *     kmsKeyId?: string,
     *     dedicatedServiceAccountId?: string,
     *     transitGatewayConfiguration?: TransitGatewayConfiguration,
     *     customDNSConfiguration?: list<CustomDNSServer>,
     *     creationTimestamp?: \Aws\Api\DateTimeResult,
     *     updateTimestamp?: \Aws\Api\DateTimeResult,
     *     availabilityZoneIds?: list<string>,
     *     certificateAuthorityArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
