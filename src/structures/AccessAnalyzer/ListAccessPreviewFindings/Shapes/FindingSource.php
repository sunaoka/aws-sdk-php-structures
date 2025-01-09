<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListAccessPreviewFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POLICY'|'BUCKET_ACL'|'S3_ACCESS_POINT'|'S3_ACCESS_POINT_ACCOUNT' $type
 * @property FindingSourceDetail $detail
 */
class FindingSource extends Shape
{
    /**
     * @param array{
     *     type: 'POLICY'|'BUCKET_ACL'|'S3_ACCESS_POINT'|'S3_ACCESS_POINT_ACCOUNT',
     *     detail?: FindingSourceDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
