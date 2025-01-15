<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLDER'|'DOCUMENT'|null $Type
 * @property string|null $Name
 * @property string|null $OriginalName
 * @property string|null $Id
 * @property string|null $VersionId
 * @property UserMetadata|null $Owner
 * @property string|null $ParentId
 */
class ResourceMetadata extends Shape
{
    /**
     * @param array{
     *     Type?: 'FOLDER'|'DOCUMENT'|null,
     *     Name?: string|null,
     *     OriginalName?: string|null,
     *     Id?: string|null,
     *     VersionId?: string|null,
     *     Owner?: UserMetadata|null,
     *     ParentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
