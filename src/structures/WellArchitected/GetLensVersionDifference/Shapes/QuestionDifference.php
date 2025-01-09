<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QuestionId
 * @property string $QuestionTitle
 * @property 'UPDATED'|'NEW'|'DELETED' $DifferenceStatus
 */
class QuestionDifference extends Shape
{
    /**
     * @param array{
     *     QuestionId?: string,
     *     QuestionTitle?: string,
     *     DifferenceStatus?: 'UPDATED'|'NEW'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
