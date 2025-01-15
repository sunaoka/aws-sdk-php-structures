<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POLICY'|'BUCKET_ACL'|'S3_ACCESS_POINT'|'S3_ACCESS_POINT_ACCOUNT' $type
 * @property FindingSourceDetail|null $detail
 */
class FindingSource extends Shape
{
    /**
     * @param array{
     *     type: 'POLICY'|'BUCKET_ACL'|'S3_ACCESS_POINT'|'S3_ACCESS_POINT_ACCOUNT',
     *     detail?: FindingSourceDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
