<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetContextGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property string|null $cloudProvider
 * @property string|null $sourceAccountId
 * @property string|null $namespace
 * @property 'GEN_AI_AGENT'|'GEN_AI_MODEL'|'DATABASE'|'MESSAGING_QUEUE'|'COMPUTE'|'STORAGE'|'NETWORK'|null $category
 * @property string|null $stage
 */
class NodeProperties extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     cloudProvider?: string|null,
     *     sourceAccountId?: string|null,
     *     namespace?: string|null,
     *     category?: 'GEN_AI_AGENT'|'GEN_AI_MODEL'|'DATABASE'|'MESSAGING_QUEUE'|'COMPUTE'|'STORAGE'|'NETWORK'|null,
     *     stage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
