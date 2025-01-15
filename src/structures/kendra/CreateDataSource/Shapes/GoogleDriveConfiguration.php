<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 * @property list<string>|null $ExcludeMimeTypes
 * @property list<string>|null $ExcludeUserAccounts
 * @property list<string>|null $ExcludeSharedDrives
 */
class GoogleDriveConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretArn: string,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     ExcludeMimeTypes?: list<string>|null,
     *     ExcludeUserAccounts?: list<string>|null,
     *     ExcludeSharedDrives?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
