<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'INTENT_GAP'|'WARNING'|'QUESTION'|'INFO'|'ERROR'|'CONTEXT'|'EXCLUDED'|'BEHAVIOR_CHANGE'>|null $insightTypes
 */
class ListNetworkMigrationInsightsFilters extends Shape
{
    /**
     * @param array{insightTypes?: list<'INTENT_GAP'|'WARNING'|'QUESTION'|'INFO'|'ERROR'|'CONTEXT'|'EXCLUDED'|'BEHAVIOR_CHANGE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
