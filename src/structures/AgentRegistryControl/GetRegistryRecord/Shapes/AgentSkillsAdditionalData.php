<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentSkillsMdDescriptor|null $skillMd
 * @property AgentSkillsPackageDescriptor|null $skillPackage
 * @property 'GITHUB'|null $repositoryProvider
 * @property AgentSkillsSourceConfiguration|null $sourceConfiguration
 */
class AgentSkillsAdditionalData extends Shape
{
    /**
     * @param array{
     *     skillMd?: AgentSkillsMdDescriptor|null,
     *     skillPackage?: AgentSkillsPackageDescriptor|null,
     *     repositoryProvider?: 'GITHUB'|null,
     *     sourceConfiguration?: AgentSkillsSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
