<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProspectingResultAws|null $Aws
 */
class ProspectingResult extends Shape
{
    /**
     * @param array{Aws?: ProspectingResultAws|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
