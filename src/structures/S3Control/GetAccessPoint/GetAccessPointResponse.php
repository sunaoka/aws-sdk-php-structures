<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Bucket
 * @property 'Internet'|'VPC' $NetworkOrigin
 * @property Shapes\VpcConfiguration $VpcConfiguration
 * @property Shapes\PublicAccessBlockConfiguration $PublicAccessBlockConfiguration
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $Alias
 * @property string $AccessPointArn
 * @property array<string, string> $Endpoints
 * @property string $BucketAccountId
 */
class GetAccessPointResponse extends Response
{
}
