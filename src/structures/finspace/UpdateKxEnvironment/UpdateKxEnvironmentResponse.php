<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\TransitGatewayConfiguration $transitGatewayConfiguration
 * @property list<Shapes\CustomDNSServer> $customDNSConfiguration
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 * @property \Aws\Api\DateTimeResult $updateTimestamp
 * @property list<string> $availabilityZoneIds
 */
class UpdateKxEnvironmentResponse extends Response
{
}
