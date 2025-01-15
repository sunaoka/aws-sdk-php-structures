<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED'|null $status
 * @property string|null $environmentId
 * @property string|null $description
 * @property string|null $environmentArn
 * @property string|null $kmsKeyId
 * @property \Aws\Api\DateTimeResult|null $creationTimestamp
 */
class CreateKxEnvironmentResponse extends Response
{
}
