<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC_READ'|'AUTHENTICATED_READ'|'BUCKET_OWNER_READ'|'BUCKET_OWNER_FULL_CONTROL' $CannedAcl
 */
class S3DestinationAccessControl extends Shape
{
    /**
     * @param array{CannedAcl?: 'PUBLIC_READ'|'AUTHENTICATED_READ'|'BUCKET_OWNER_READ'|'BUCKET_OWNER_FULL_CONTROL'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
