<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestId
 * @property string $Requester
 * @property EventInfo $EventInfo
 * @property 'GitHub'|'GitLab'|'NativeS3' $VendorName
 */
class RequestMetadata extends Shape
{
    /**
     * @param array{
     *     RequestId?: string,
     *     Requester?: string,
     *     EventInfo?: EventInfo,
     *     VendorName?: 'GitHub'|'GitLab'|'NativeS3'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
