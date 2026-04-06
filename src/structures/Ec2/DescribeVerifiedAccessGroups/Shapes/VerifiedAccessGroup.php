<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessGroupId
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property string|null $Owner
 * @property string|null $VerifiedAccessGroupArn
 * @property string|null $CreationTime
 * @property string|null $LastUpdatedTime
 * @property string|null $DeletionTime
 * @property list<Tag>|null $Tags
 * @property VerifiedAccessSseSpecificationResponse|null $SseSpecification
 */
class VerifiedAccessGroup extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessGroupId?: string|null,
     *     VerifiedAccessInstanceId?: string|null,
     *     Description?: string|null,
     *     Owner?: string|null,
     *     VerifiedAccessGroupArn?: string|null,
     *     CreationTime?: string|null,
     *     LastUpdatedTime?: string|null,
     *     DeletionTime?: string|null,
     *     Tags?: list<Tag>|null,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
