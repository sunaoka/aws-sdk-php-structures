<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringChange|null $journeyDescription
 * @property ServiceReferenceChanges|null $associatedServices
 */
class UserJourneyChanges extends Shape
{
    /**
     * @param array{
     *     journeyDescription?: StringChange|null,
     *     associatedServices?: ServiceReferenceChanges|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
