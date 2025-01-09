<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suggestion
 * @property int $score
 * @property string $id
 */
class SuggestionMatch extends Shape
{
    /**
     * @param array{
     *     suggestion?: string,
     *     score?: int,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
