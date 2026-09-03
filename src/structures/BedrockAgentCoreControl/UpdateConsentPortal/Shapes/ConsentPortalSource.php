<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConsentPortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property 'agentcore-gateway' $type
 */
class ConsentPortalSource extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     type: 'agentcore-gateway'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
