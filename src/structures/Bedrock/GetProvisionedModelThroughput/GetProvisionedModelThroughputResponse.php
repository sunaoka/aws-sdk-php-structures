<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max> $modelUnits
 * @property int<1, max> $desiredModelUnits
 * @property string $provisionedModelName
 * @property string $provisionedModelArn
 * @property string $modelArn
 * @property string $desiredModelArn
 * @property string $foundationModelArn
 * @property 'Creating'|'InService'|'Updating'|'Failed' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $failureMessage
 * @property 'OneMonth'|'SixMonths' $commitmentDuration
 * @property \Aws\Api\DateTimeResult $commitmentExpirationTime
 */
class GetProvisionedModelThroughputResponse extends Response
{
}
