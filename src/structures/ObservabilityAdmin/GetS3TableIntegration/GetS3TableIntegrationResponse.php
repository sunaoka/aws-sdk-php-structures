<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetS3TableIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $RoleArn
 * @property 'ACTIVE'|'DELETING'|null $Status
 * @property Shapes\Encryption|null $Encryption
 * @property string|null $DestinationTableBucketArn
 * @property int|null $CreatedTimeStamp
 */
class GetS3TableIntegrationResponse extends Response
{
}
