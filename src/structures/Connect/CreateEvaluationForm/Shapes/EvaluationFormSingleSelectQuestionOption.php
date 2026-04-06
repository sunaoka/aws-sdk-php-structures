<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RefId
 * @property string $Text
 * @property int|null $Score
 * @property bool|null $AutomaticFail
 * @property AutomaticFailConfiguration|null $AutomaticFailConfiguration
 */
class EvaluationFormSingleSelectQuestionOption extends Shape
{
    /**
     * @param array{
     *     RefId: string,
     *     Text: string,
     *     Score?: int|null,
     *     AutomaticFail?: bool|null,
     *     AutomaticFailConfiguration?: AutomaticFailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
