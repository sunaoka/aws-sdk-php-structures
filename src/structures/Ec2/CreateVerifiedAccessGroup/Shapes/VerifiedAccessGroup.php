<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessGroupId
 * @property string $VerifiedAccessInstanceId
 * @property string $Description
 * @property string $Owner
 * @property string $VerifiedAccessGroupArn
 * @property string $CreationTime
 * @property string $LastUpdatedTime
 * @property string $DeletionTime
 * @property list<Tag> $Tags
 * @property VerifiedAccessSseSpecificationResponse $SseSpecification
 */
class VerifiedAccessGroup extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessGroupId?: string,
     *     VerifiedAccessInstanceId?: string,
     *     Description?: string,
     *     Owner?: string,
     *     VerifiedAccessGroupArn?: string,
     *     CreationTime?: string,
     *     LastUpdatedTime?: string,
     *     DeletionTime?: string,
     *     Tags?: list<Tag>,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
