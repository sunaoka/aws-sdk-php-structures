<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $questionSetId
 * @property string $version
 */
class QuestionSetReference extends Shape
{
    /**
     * @param array{
     *     questionSetId: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
