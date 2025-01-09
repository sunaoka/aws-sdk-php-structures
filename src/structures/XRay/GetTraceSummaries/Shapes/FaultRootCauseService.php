<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Names
 * @property string $Type
 * @property string $AccountId
 * @property list<FaultRootCauseEntity> $EntityPath
 * @property bool $Inferred
 */
class FaultRootCauseService extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Names?: list<string>,
     *     Type?: string,
     *     AccountId?: string,
     *     EntityPath?: list<FaultRootCauseEntity>,
     *     Inferred?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
