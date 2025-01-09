<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateVoiceConnectorGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property int $Priority
 */
class VoiceConnectorItem extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Priority: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
