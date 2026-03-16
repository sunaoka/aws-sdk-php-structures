<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateNetworkMigrationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationDefinitionID
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\SourceConfiguration>|null $sourceConfigurations
 * @property Shapes\TargetS3ConfigurationUpdate|null $targetS3Configuration
 * @property Shapes\TargetNetworkUpdate|null $targetNetwork
 * @property 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null $targetDeployment
 * @property array<string, string>|null $scopeTags
 */
class UpdateNetworkMigrationDefinitionRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationDefinitionID: string,
     *     name?: string|null,
     *     description?: string|null,
     *     sourceConfigurations?: list<Shapes\SourceConfiguration>|null,
     *     targetS3Configuration?: Shapes\TargetS3ConfigurationUpdate|null,
     *     targetNetwork?: Shapes\TargetNetworkUpdate|null,
     *     targetDeployment?: 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
