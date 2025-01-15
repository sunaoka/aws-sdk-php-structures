<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DescribeCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequestId
 * @property string|null $Requester
 * @property EventInfo|null $EventInfo
 * @property 'GitHub'|'GitLab'|'NativeS3'|null $VendorName
 */
class RequestMetadata extends Shape
{
    /**
     * @param array{
     *     RequestId?: string|null,
     *     Requester?: string|null,
     *     EventInfo?: EventInfo|null,
     *     VendorName?: 'GitHub'|'GitLab'|'NativeS3'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
