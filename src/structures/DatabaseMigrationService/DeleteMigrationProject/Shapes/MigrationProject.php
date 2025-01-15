<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteMigrationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MigrationProjectName
 * @property string|null $MigrationProjectArn
 * @property \Aws\Api\DateTimeResult|null $MigrationProjectCreationTime
 * @property list<DataProviderDescriptor>|null $SourceDataProviderDescriptors
 * @property list<DataProviderDescriptor>|null $TargetDataProviderDescriptors
 * @property string|null $InstanceProfileArn
 * @property string|null $InstanceProfileName
 * @property string|null $TransformationRules
 * @property string|null $Description
 * @property SCApplicationAttributes|null $SchemaConversionApplicationAttributes
 */
class MigrationProject extends Shape
{
    /**
     * @param array{
     *     MigrationProjectName?: string|null,
     *     MigrationProjectArn?: string|null,
     *     MigrationProjectCreationTime?: \Aws\Api\DateTimeResult|null,
     *     SourceDataProviderDescriptors?: list<DataProviderDescriptor>|null,
     *     TargetDataProviderDescriptors?: list<DataProviderDescriptor>|null,
     *     InstanceProfileArn?: string|null,
     *     InstanceProfileName?: string|null,
     *     TransformationRules?: string|null,
     *     Description?: string|null,
     *     SchemaConversionApplicationAttributes?: SCApplicationAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
