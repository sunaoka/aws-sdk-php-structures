<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantDomain
 * @property string $SecretArn
 * @property OneDriveUsers $OneDriveUsers
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 * @property bool $DisableLocalGroups
 */
class OneDriveConfiguration extends Shape
{
    /**
     * @param array{
     *     TenantDomain: string,
     *     SecretArn: string,
     *     OneDriveUsers: OneDriveUsers,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     DisableLocalGroups?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
