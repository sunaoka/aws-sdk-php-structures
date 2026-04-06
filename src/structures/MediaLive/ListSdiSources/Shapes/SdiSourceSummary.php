<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSdiSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property list<string>|null $Inputs
 * @property 'QUADRANT'|'INTERLEAVE'|null $Mode
 * @property string|null $Name
 * @property 'IDLE'|'IN_USE'|'DELETED'|null $State
 * @property 'SINGLE'|'QUAD'|null $Type
 */
class SdiSourceSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Inputs?: list<string>|null,
     *     Mode?: 'QUADRANT'|'INTERLEAVE'|null,
     *     Name?: string|null,
     *     State?: 'IDLE'|'IN_USE'|'DELETED'|null,
     *     Type?: 'SINGLE'|'QUAD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
