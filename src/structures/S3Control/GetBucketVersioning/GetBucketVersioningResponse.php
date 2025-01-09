<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketVersioning;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Enabled'|'Suspended' $Status
 * @property 'Enabled'|'Disabled' $MFADelete
 */
class GetBucketVersioningResponse extends Response
{
}
