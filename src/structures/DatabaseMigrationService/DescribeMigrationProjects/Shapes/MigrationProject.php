<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMigrationProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MigrationProjectName
 * @property string $MigrationProjectArn
 * @property \Aws\Api\DateTimeResult $MigrationProjectCreationTime
 * @property list<DataProviderDescriptor> $SourceDataProviderDescriptors
 * @property list<DataProviderDescriptor> $TargetDataProviderDescriptors
 * @property string $InstanceProfileArn
 * @property string $InstanceProfileName
 * @property string $TransformationRules
 * @property string $Description
 * @property SCApplicationAttributes $SchemaConversionApplicationAttributes
 */
class MigrationProject extends Shape
{
    /**
     * @param array{
     *     MigrationProjectName?: string,
     *     MigrationProjectArn?: string,
     *     MigrationProjectCreationTime?: \Aws\Api\DateTimeResult,
     *     SourceDataProviderDescriptors?: list<DataProviderDescriptor>,
     *     TargetDataProviderDescriptors?: list<DataProviderDescriptor>,
     *     InstanceProfileArn?: string,
     *     InstanceProfileName?: string,
     *     TransformationRules?: string,
     *     Description?: string,
     *     SchemaConversionApplicationAttributes?: SCApplicationAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
