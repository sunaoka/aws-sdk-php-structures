<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListSystemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userJourneyName
 * @property UserJourneyChanges|null $changes
 */
class SystemUserJourneyUpdatedMetadata extends Shape
{
    /**
     * @param array{
     *     userJourneyName?: string|null,
     *     changes?: UserJourneyChanges|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
