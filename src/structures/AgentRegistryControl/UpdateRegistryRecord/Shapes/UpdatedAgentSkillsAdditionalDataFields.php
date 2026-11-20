<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdatedAgentSkillsMdDescriptor|null $skillMd
 * @property UpdatedAgentSkillsPackageDescriptor|null $skillPackage
 * @property UpdatedAgentSkillsRepositoryProvider|null $repositoryProvider
 * @property UpdatedAgentSkillsSourceConfiguration|null $sourceConfiguration
 */
class UpdatedAgentSkillsAdditionalDataFields extends Shape
{
    /**
     * @param array{
     *     skillMd?: UpdatedAgentSkillsMdDescriptor|null,
     *     skillPackage?: UpdatedAgentSkillsPackageDescriptor|null,
     *     repositoryProvider?: UpdatedAgentSkillsRepositoryProvider|null,
     *     sourceConfiguration?: UpdatedAgentSkillsSourceConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
