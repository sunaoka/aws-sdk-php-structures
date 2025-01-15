<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuestionId
 * @property string|null $QuestionTitle
 * @property 'UPDATED'|'NEW'|'DELETED'|null $DifferenceStatus
 */
class QuestionDifference extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string|null,
     *     QuestionTitle?: string|null,
     *     DifferenceStatus?: 'UPDATED'|'NEW'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
