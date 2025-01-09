<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string $MigrationProjectName
 * @property list<Shapes\DataProviderDescriptorDefinition> $SourceDataProviderDescriptors
 * @property list<Shapes\DataProviderDescriptorDefinition> $TargetDataProviderDescriptors
 * @property string $InstanceProfileIdentifier
 * @property string $TransformationRules
 * @property string $Description
 * @property Shapes\SCApplicationAttributes $SchemaConversionApplicationAttributes
 */
class ModifyMigrationProjectRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     MigrationProjectName?: string,
     *     SourceDataProviderDescriptors?: list<Shapes\DataProviderDescriptorDefinition>,
     *     TargetDataProviderDescriptors?: list<Shapes\DataProviderDescriptorDefinition>,
     *     InstanceProfileIdentifier?: string,
     *     TransformationRules?: string,
     *     Description?: string,
     *     SchemaConversionApplicationAttributes?: Shapes\SCApplicationAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
