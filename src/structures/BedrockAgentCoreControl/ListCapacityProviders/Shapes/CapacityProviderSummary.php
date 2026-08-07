<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $capacityProviderId
 * @property string $capacityProviderArn
 * @property string $name
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class CapacityProviderSummary extends Shape
{
    /**
     * @param array{
     *     capacityProviderId: string,
     *     capacityProviderArn: string,
     *     name: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED',
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
