<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 * @property 'WINDOWS' $FileSystemType
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property string $SecretArn
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 */
class FsxConfiguration extends Shape
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemType: 'WINDOWS',
     *     VpcConfiguration: DataSourceVpcConfiguration,
     *     SecretArn?: string,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
