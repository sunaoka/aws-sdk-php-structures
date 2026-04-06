<?php

namespace Sunaoka\Aws\Structures\Omics\PutS3AccessPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $s3AccessPointArn
 * @property string|null $storeId
 * @property 'SEQUENCE_STORE'|'REFERENCE_STORE'|null $storeType
 */
class PutS3AccessPolicyResponse extends Response
{
}
