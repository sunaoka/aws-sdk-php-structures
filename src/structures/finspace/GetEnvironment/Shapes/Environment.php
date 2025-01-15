<?php

namespace Sunaoka\Aws\Structures\finspace\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $environmentId
 * @property string|null $awsAccountId
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED'|null $status
 * @property string|null $environmentUrl
 * @property string|null $description
 * @property string|null $environmentArn
 * @property string|null $sageMakerStudioDomainUrl
 * @property string|null $kmsKeyId
 * @property string|null $dedicatedServiceAccountId
 * @property 'FEDERATED'|'LOCAL'|null $federationMode
 * @property FederationParameters|null $federationParameters
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     environmentId?: string|null,
     *     awsAccountId?: string|null,
     *     status?: 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED'|null,
     *     environmentUrl?: string|null,
     *     description?: string|null,
     *     environmentArn?: string|null,
     *     sageMakerStudioDomainUrl?: string|null,
     *     kmsKeyId?: string|null,
     *     dedicatedServiceAccountId?: string|null,
     *     federationMode?: 'FEDERATED'|'LOCAL'|null,
     *     federationParameters?: FederationParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
