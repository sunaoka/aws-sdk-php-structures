<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectIdentifier
 * @property string|null $MigrationProjectName
 * @property list<Shapes\DataProviderDescriptorDefinition>|null $SourceDataProviderDescriptors
 * @property list<Shapes\DataProviderDescriptorDefinition>|null $TargetDataProviderDescriptors
 * @property string|null $InstanceProfileIdentifier
 * @property string|null $TransformationRules
 * @property string|null $Description
 * @property Shapes\SCApplicationAttributes|null $SchemaConversionApplicationAttributes
 */
class ModifyMigrationProjectRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectIdentifier: string,
     *     MigrationProjectName?: string|null,
     *     SourceDataProviderDescriptors?: list<Shapes\DataProviderDescriptorDefinition>|null,
     *     TargetDataProviderDescriptors?: list<Shapes\DataProviderDescriptorDefinition>|null,
     *     InstanceProfileIdentifier?: string|null,
     *     TransformationRules?: string|null,
     *     Description?: string|null,
     *     SchemaConversionApplicationAttributes?: Shapes\SCApplicationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
