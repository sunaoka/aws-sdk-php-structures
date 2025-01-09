<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $environmentId
 * @property string $awsAccountId
 * @property 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED' $status
 * @property string $environmentUrl
 * @property string $description
 * @property string $environmentArn
 * @property string $sageMakerStudioDomainUrl
 * @property string $kmsKeyId
 * @property string $dedicatedServiceAccountId
 * @property 'FEDERATED'|'LOCAL' $federationMode
 * @property FederationParameters $federationParameters
 */
class Environment extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     environmentId?: string,
     *     awsAccountId?: string,
     *     status?: 'CREATE_REQUESTED'|'CREATING'|'CREATED'|'DELETE_REQUESTED'|'DELETING'|'DELETED'|'FAILED_CREATION'|'RETRY_DELETION'|'FAILED_DELETION'|'UPDATE_NETWORK_REQUESTED'|'UPDATING_NETWORK'|'FAILED_UPDATING_NETWORK'|'SUSPENDED',
     *     environmentUrl?: string,
     *     description?: string,
     *     environmentArn?: string,
     *     sageMakerStudioDomainUrl?: string,
     *     kmsKeyId?: string,
     *     dedicatedServiceAccountId?: string,
     *     federationMode?: 'FEDERATED'|'LOCAL',
     *     federationParameters?: FederationParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
