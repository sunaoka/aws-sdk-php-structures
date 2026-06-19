<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneAttributeFilter|null $AttributeFilter
 * @property ContactEvaluationAttributeFilter|null $ContactEvaluationAttributeFilter
 */
class EvaluationSearchFilter extends Shape
{
    /**
     * @param array{
     *     AttributeFilter?: ControlPlaneAttributeFilter|null,
     *     ContactEvaluationAttributeFilter?: ContactEvaluationAttributeFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
