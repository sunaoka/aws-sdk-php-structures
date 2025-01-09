<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StartRecommendationsRequestEntry> $Data
 */
class BatchStartRecommendationsRequest extends Request
{
    /**
     * @param array{Data?: list<Shapes\StartRecommendationsRequestEntry>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
