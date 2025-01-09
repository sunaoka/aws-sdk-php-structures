<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $awsAccountId
 * @property 'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted' $state
 * @property string $errorMessage
 * @property string $webAppDnsDomain
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $instanceName
 * @property string $instanceDescription
 * @property string $kmsKeyArn
 * @property double $versionNumber
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     awsAccountId: string,
     *     state: 'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted',
     *     errorMessage?: string,
     *     webAppDnsDomain?: string,
     *     createdTime?: \Aws\Api\DateTimeResult,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult,
     *     instanceName?: string,
     *     instanceDescription?: string,
     *     kmsKeyArn?: string,
     *     versionNumber?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
