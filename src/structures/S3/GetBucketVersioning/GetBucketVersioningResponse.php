<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketVersioning;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Enabled'|'Suspended'|null $Status
 * @property 'Enabled'|'Disabled'|null $MFADelete
 */
class GetBucketVersioningResponse extends Response
{
}
