<?php

namespace Sunaoka\Aws\Structures\Connect\ListFlowAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $FlowId
 * @property 'VOICE_PHONE_NUMBER'|null $ResourceType
 */
class FlowAssociationSummary extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     FlowId?: string|null,
     *     ResourceType?: 'VOICE_PHONE_NUMBER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
