<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property 'DEFAULT'|'NONE'|null $persistenceMode
 * @property list<AgenticRetrieveMemoryRetrievalConfig>|null $retrievalConfigs
 * @property AgenticRetrieveMemorySessionBinding|null $sessionBinding
 */
class AgenticRetrieveMemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     persistenceMode?: 'DEFAULT'|'NONE'|null,
     *     retrievalConfigs?: list<AgenticRetrieveMemoryRetrievalConfig>|null,
     *     sessionBinding?: AgenticRetrieveMemorySessionBinding|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
