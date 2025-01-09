<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'READ'|'WRITE'|'READ_ACP'|'WRITE_ACP'|'FULL_CONTROL' $permission
 * @property AclGrantee $grantee
 */
class S3BucketAclGrantConfiguration extends Shape
{
    /**
     * @param array{
     *     permission: 'READ'|'WRITE'|'READ_ACP'|'WRITE_ACP'|'FULL_CONTROL',
     *     grantee: AclGrantee
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
