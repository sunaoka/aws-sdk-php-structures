<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $suggestion
 * @property int|null $score
 * @property string|null $id
 */
class SuggestionMatch extends Shape
{
    /**
     * @param array{
     *     suggestion?: string|null,
     *     score?: int|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
