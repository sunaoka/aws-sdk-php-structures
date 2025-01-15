<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StartRecommendationsRequestEntry>|null $Data
 */
class BatchStartRecommendationsRequest extends Request
{
    /**
     * @param array{Data?: list<Shapes\StartRecommendationsRequestEntry>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
