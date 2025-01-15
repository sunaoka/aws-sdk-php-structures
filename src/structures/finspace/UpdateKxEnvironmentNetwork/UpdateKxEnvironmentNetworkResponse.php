<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironmentNetwork;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\TransitGatewayConfiguration|null $transitGatewayConfiguration
 * @property list<Shapes\CustomDNSServer>|null $customDNSConfiguration
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 * @property \Aws\Api\DateTimeResult|null $updateTimestamp
 * @property list<string>|null $availabilityZoneIds
 */
class UpdateKxEnvironmentNetworkResponse extends Response
{
}
