<?php

namespace Sunaoka\Aws\Structures\Omics\PutS3AccessPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $s3AccessPointArn
 * @property string $storeId
 * @property 'SEQUENCE_STORE'|'REFERENCE_STORE' $storeType
 */
class PutS3AccessPolicyResponse extends Response
{
}
