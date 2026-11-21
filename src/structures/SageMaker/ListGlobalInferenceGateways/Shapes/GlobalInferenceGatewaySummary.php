<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListGlobalInferenceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class GlobalInferenceGatewaySummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Name: string,
     *     Status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED',
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
