<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationSourceType
 * @property list<ResourceDataSyncOrganizationalUnit> $OrganizationalUnits
 */
class ResourceDataSyncAwsOrganizationsSource extends Shape
{
    /**
     * @param array{
     *     OrganizationSourceType: string,
     *     OrganizationalUnits?: list<ResourceDataSyncOrganizationalUnit>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
