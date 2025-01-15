<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 * @property 'WINDOWS' $FileSystemType
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property string|null $SecretArn
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 */
class FsxConfiguration extends Shape
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemType: 'WINDOWS',
     *     VpcConfiguration: DataSourceVpcConfiguration,
     *     SecretArn?: string|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
