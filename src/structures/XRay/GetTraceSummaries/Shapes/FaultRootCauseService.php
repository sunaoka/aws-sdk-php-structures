<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Names
 * @property string|null $Type
 * @property string|null $AccountId
 * @property list<FaultRootCauseEntity>|null $EntityPath
 * @property bool|null $Inferred
 */
class FaultRootCauseService extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Names?: list<string>|null,
     *     Type?: string|null,
     *     AccountId?: string|null,
     *     EntityPath?: list<FaultRootCauseEntity>|null,
     *     Inferred?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
