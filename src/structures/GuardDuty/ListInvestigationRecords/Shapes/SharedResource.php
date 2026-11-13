<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $Identifier
 */
class SharedResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Identifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
