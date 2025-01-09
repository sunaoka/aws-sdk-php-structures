<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED' $status
 * @property string $environmentId
 * @property string $description
 * @property string $environmentArn
 * @property string $kmsKeyId
 * @property \Aws\Api\DateTimeResult $creationTimestamp
 */
class CreateKxEnvironmentResponse extends Response
{
}
