<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConfigurationBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $bundleId
 * @property string|null $bundleName
 * @property string|null $description
 * @property array<string, Shapes\ComponentConfiguration>|null $components
 * @property list<string>|null $parentVersionIds
 * @property string|null $branchName
 * @property string|null $commitMessage
 * @property Shapes\VersionCreatedBySource|null $createdBy
 */
class UpdateConfigurationBundleRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     bundleId: string,
     *     bundleName?: string|null,
     *     description?: string|null,
     *     components?: array<string, Shapes\ComponentConfiguration>|null,
     *     parentVersionIds?: list<string>|null,
     *     branchName?: string|null,
     *     commitMessage?: string|null,
     *     createdBy?: Shapes\VersionCreatedBySource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
