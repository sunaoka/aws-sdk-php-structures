<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property OutputGroupSettings $OutputGroupSettings
 * @property list<Output> $Outputs
 */
class OutputGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     OutputGroupSettings: OutputGroupSettings,
     *     Outputs: list<Output>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
