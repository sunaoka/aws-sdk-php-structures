<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProvisionedModelThroughputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $provisionedModelName
 * @property string $provisionedModelArn
 * @property string $modelArn
 * @property string $desiredModelArn
 * @property string $foundationModelArn
 * @property int $modelUnits
 * @property int $desiredModelUnits
 * @property 'Creating'|'InService'|'Updating'|'Failed' $status
 * @property 'OneMonth'|'SixMonths' $commitmentDuration
 * @property \Aws\Api\DateTimeResult $commitmentExpirationTime
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 */
class ProvisionedModelSummary extends Shape
{
    /**
     * @param array{
     *     provisionedModelName: string,
     *     provisionedModelArn: string,
     *     modelArn: string,
     *     desiredModelArn: string,
     *     foundationModelArn: string,
     *     modelUnits: int,
     *     desiredModelUnits: int,
     *     status: 'Creating'|'InService'|'Updating'|'Failed',
     *     commitmentDuration?: 'OneMonth'|'SixMonths',
     *     commitmentExpirationTime?: \Aws\Api\DateTimeResult,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
