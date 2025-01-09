<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property OutputGroupSettings $OutputGroupSettings
 * @property list<Output> $Outputs
 */
class OutputGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     OutputGroupSettings: OutputGroupSettings,
     *     Outputs: list<Output>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
