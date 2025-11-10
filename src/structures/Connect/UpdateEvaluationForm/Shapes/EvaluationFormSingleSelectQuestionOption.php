<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefId
 * @property string $Text
 * @property int<0, 10>|null $Score
 * @property bool|null $AutomaticFail
 * @property AutomaticFailConfiguration|null $AutomaticFailConfiguration
 */
class EvaluationFormSingleSelectQuestionOption extends Shape
{
    /**
     * @param array{
     *     RefId: string,
     *     Text: string,
     *     Score?: int<0, 10>|null,
     *     AutomaticFail?: bool|null,
     *     AutomaticFailConfiguration?: AutomaticFailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
