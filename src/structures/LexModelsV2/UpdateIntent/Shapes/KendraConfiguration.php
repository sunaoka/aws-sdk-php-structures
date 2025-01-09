<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property bool $queryFilterStringEnabled
 * @property string $queryFilterString
 */
class KendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterStringEnabled?: bool,
     *     queryFilterString?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
