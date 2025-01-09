<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketVersioning\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled' $MFADelete
 * @property 'Enabled'|'Suspended' $Status
 */
class VersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     MFADelete?: 'Enabled'|'Disabled',
     *     Status?: 'Enabled'|'Suspended'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
