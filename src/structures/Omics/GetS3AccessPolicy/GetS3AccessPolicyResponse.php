<?php

namespace Sunaoka\Aws\Structures\Omics\GetS3AccessPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $s3AccessPointArn
 * @property string|null $storeId
 * @property 'SEQUENCE_STORE'|'REFERENCE_STORE'|null $storeType
 * @property \Aws\Api\DateTimeResult|null $updateTime
 * @property string $s3AccessPolicy
 */
class GetS3AccessPolicyResponse extends Response
{
}
