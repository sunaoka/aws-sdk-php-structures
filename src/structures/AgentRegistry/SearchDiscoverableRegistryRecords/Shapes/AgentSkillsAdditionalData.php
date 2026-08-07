<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentSkillsMdDescriptor|null $skillMd
 */
class AgentSkillsAdditionalData extends Shape
{
    /**
     * @param array{skillMd?: AgentSkillsMdDescriptor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
