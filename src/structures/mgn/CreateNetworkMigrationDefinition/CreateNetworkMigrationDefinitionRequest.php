<?php

namespace Sunaoka\Aws\Structures\mgn\CreateNetworkMigrationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\SourceConfiguration>|null $sourceConfigurations
 * @property Shapes\TargetS3Configuration $targetS3Configuration
 * @property Shapes\TargetNetwork $targetNetwork
 * @property 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null $targetDeployment
 * @property array<string, string>|null $tags
 * @property array<string, string>|null $scopeTags
 */
class CreateNetworkMigrationDefinitionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     sourceConfigurations?: list<Shapes\SourceConfiguration>|null,
     *     targetS3Configuration: Shapes\TargetS3Configuration,
     *     targetNetwork: Shapes\TargetNetwork,
     *     targetDeployment?: 'SINGLE_ACCOUNT'|'MULTI_ACCOUNT'|null,
     *     tags?: array<string, string>|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
