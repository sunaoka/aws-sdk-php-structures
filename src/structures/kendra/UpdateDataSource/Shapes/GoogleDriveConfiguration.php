<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 * @property list<string> $ExcludeMimeTypes
 * @property list<string> $ExcludeUserAccounts
 * @property list<string> $ExcludeSharedDrives
 */
class GoogleDriveConfiguration extends Shape
{
    /**
     * @param array{
     *     SecretArn: string,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     ExcludeMimeTypes?: list<string>,
     *     ExcludeUserAccounts?: list<string>,
     *     ExcludeSharedDrives?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
