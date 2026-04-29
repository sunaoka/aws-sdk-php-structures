<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConfigurationBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $bundleName
 * @property string|null $description
 * @property array<string, Shapes\ComponentConfiguration> $components
 * @property string|null $branchName
 * @property string|null $commitMessage
 * @property Shapes\VersionCreatedBySource|null $createdBy
 * @property array<string, string>|null $tags
 */
class CreateConfigurationBundleRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     bundleName: string,
     *     description?: string|null,
     *     components: array<string, Shapes\ComponentConfiguration>,
     *     branchName?: string|null,
     *     commitMessage?: string|null,
     *     createdBy?: Shapes\VersionCreatedBySource|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
