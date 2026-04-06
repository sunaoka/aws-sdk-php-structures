<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProvisionedModelThroughputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $provisionedModelName
 * @property string $provisionedModelArn
 * @property string $modelArn
 * @property string $desiredModelArn
 * @property string $foundationModelArn
 * @property int<1, max> $modelUnits
 * @property int<1, max> $desiredModelUnits
 * @property 'Creating'|'InService'|'Updating'|'Failed' $status
 * @property 'OneMonth'|'SixMonths'|null $commitmentDuration
 * @property \Aws\Api\DateTimeResult|null $commitmentExpirationTime
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
     *     modelUnits: int<1, max>,
     *     desiredModelUnits: int<1, max>,
     *     status: 'Creating'|'InService'|'Updating'|'Failed',
     *     commitmentDuration?: 'OneMonth'|'SixMonths'|null,
     *     commitmentExpirationTime?: \Aws\Api\DateTimeResult|null,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
