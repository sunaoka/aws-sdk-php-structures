<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantDomain
 * @property string $SecretArn
 * @property OneDriveUsers $OneDriveUsers
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 * @property bool|null $DisableLocalGroups
 */
class OneDriveConfiguration extends Shape
{
    /**
     * @param array{
     *     TenantDomain: string,
     *     SecretArn: string,
     *     OneDriveUsers: OneDriveUsers,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     DisableLocalGroups?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
