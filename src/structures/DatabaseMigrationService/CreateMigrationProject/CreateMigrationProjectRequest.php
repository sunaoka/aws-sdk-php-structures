<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateMigrationProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MigrationProjectName
 * @property list<Shapes\DataProviderDescriptorDefinition> $SourceDataProviderDescriptors
 * @property list<Shapes\DataProviderDescriptorDefinition> $TargetDataProviderDescriptors
 * @property string $InstanceProfileIdentifier
 * @property string|null $TransformationRules
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SCApplicationAttributes|null $SchemaConversionApplicationAttributes
 */
class CreateMigrationProjectRequest extends Request
{
    /**
     * @param array{
     *     MigrationProjectName?: string|null,
     *     SourceDataProviderDescriptors: list<Shapes\DataProviderDescriptorDefinition>,
     *     TargetDataProviderDescriptors: list<Shapes\DataProviderDescriptorDefinition>,
     *     InstanceProfileIdentifier: string,
     *     TransformationRules?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SchemaConversionApplicationAttributes?: Shapes\SCApplicationAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
