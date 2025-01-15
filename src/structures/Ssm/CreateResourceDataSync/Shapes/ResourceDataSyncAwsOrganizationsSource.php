<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateResourceDataSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationSourceType
 * @property list<ResourceDataSyncOrganizationalUnit>|null $OrganizationalUnits
 */
class ResourceDataSyncAwsOrganizationsSource extends Shape
{
    /**
     * @param array{
     *     OrganizationSourceType: string,
     *     OrganizationalUnits?: list<ResourceDataSyncOrganizationalUnit>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
