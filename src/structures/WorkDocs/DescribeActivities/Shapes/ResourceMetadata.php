<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLDER'|'DOCUMENT' $Type
 * @property string $Name
 * @property string $OriginalName
 * @property string $Id
 * @property string $VersionId
 * @property UserMetadata $Owner
 * @property string $ParentId
 */
class ResourceMetadata extends Shape
{
    /**
     * @param array{
     *     Type?: 'FOLDER'|'DOCUMENT',
     *     Name?: string,
     *     OriginalName?: string,
     *     Id?: string,
     *     VersionId?: string,
     *     Owner?: UserMetadata,
     *     ParentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
