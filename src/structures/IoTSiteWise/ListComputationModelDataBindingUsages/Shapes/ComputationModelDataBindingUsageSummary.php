<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelDataBindingUsages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $computationModelIds
 * @property MatchedDataBinding $matchedDataBinding
 */
class ComputationModelDataBindingUsageSummary extends Shape
{
    /**
     * @param array{
     *     computationModelIds: list<string>,
     *     matchedDataBinding: MatchedDataBinding
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
