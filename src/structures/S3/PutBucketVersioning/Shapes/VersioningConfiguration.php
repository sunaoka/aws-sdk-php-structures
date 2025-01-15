<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketVersioning\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Enabled'|'Disabled'|null $MFADelete
 * @property 'Enabled'|'Suspended'|null $Status
 */
class VersioningConfiguration extends Shape
{
    /**
     * @param array{
     *     MFADelete?: 'Enabled'|'Disabled'|null,
     *     Status?: 'Enabled'|'Suspended'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
