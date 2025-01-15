<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Bucket
 * @property 'Internet'|'VPC'|null $NetworkOrigin
 * @property Shapes\VpcConfiguration|null $VpcConfiguration
 * @property Shapes\PublicAccessBlockConfiguration|null $PublicAccessBlockConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $Alias
 * @property string|null $AccessPointArn
 * @property array<string, string>|null $Endpoints
 * @property string|null $BucketAccountId
 */
class GetAccessPointResponse extends Response
{
}
