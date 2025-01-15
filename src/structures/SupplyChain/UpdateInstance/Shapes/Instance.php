<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $awsAccountId
 * @property 'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted' $state
 * @property string|null $errorMessage
 * @property string|null $webAppDnsDomain
 * @property \Aws\Api\DateTimeResult|null $createdTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property string|null $instanceName
 * @property string|null $instanceDescription
 * @property string|null $kmsKeyArn
 * @property double|null $versionNumber
 */
class Instance extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     awsAccountId: string,
     *     state: 'Initializing'|'Active'|'CreateFailed'|'DeleteFailed'|'Deleting'|'Deleted',
     *     errorMessage?: string|null,
     *     webAppDnsDomain?: string|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     instanceName?: string|null,
     *     instanceDescription?: string|null,
     *     kmsKeyArn?: string|null,
     *     versionNumber?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
