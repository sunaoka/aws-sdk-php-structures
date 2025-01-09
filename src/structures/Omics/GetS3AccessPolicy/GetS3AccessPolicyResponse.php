<?php

namespace Sunaoka\Aws\Structures\Omics\GetS3AccessPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $s3AccessPointArn
 * @property string $storeId
 * @property 'SEQUENCE_STORE'|'REFERENCE_STORE' $storeType
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $s3AccessPolicy
 */
class GetS3AccessPolicyResponse extends Response
{
}
