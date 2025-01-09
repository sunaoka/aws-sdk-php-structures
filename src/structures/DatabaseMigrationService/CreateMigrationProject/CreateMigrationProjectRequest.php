<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateMigrationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MigrationProjectName
 * @property list<Shapes\DataProviderDescriptorDefinition> $SourceDataProviderDescriptors
 * @property list<Shapes\DataProviderDescriptorDefinition> $TargetDataProviderDescriptors
 * @property string $InstanceProfileIdentifier
 * @property string $TransformationRules
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SCApplicationAttributes $SchemaConversionApplicationAttributes
 */
class CreateMigrationProjectRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectName?: string,
     *     SourceDataProviderDescriptors: list<Shapes\DataProviderDescriptorDefinition>,
     *     TargetDataProviderDescriptors: list<Shapes\DataProviderDescriptorDefinition>,
     *     InstanceProfileIdentifier: string,
     *     TransformationRules?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     SchemaConversionApplicationAttributes?: Shapes\SCApplicationAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
