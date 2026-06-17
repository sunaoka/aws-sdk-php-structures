<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<'SEMANTIC'|'SUMMARIZATION'|'USER_PREFERENCE'|'EPISODIC'>|null $strategies
 * @property int<3, 365>|null $eventExpiryDuration
 * @property string|null $encryptionKeyArn
 */
class HarnessManagedMemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     strategies?: list<'SEMANTIC'|'SUMMARIZATION'|'USER_PREFERENCE'|'EPISODIC'>|null,
     *     eventExpiryDuration?: int<3, 365>|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
