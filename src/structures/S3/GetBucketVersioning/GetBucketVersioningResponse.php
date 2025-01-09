<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketVersioning;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Enabled'|'Suspended' $Status
 * @property 'Enabled'|'Disabled' $MFADelete
 */
class GetBucketVersioningResponse extends Response
{
}
