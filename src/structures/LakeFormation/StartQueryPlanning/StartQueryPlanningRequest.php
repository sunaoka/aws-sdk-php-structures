<?php

namespace Sunaoka\Aws\Structures\LakeFormation\StartQueryPlanning;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\QueryPlanningContext $QueryPlanningContext
 * @property string $QueryString
 */
class StartQueryPlanningRequest extends Request
{
    /**
     * @param array{
     *     QueryPlanningContext: Shapes\QueryPlanningContext,
     *     QueryString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
