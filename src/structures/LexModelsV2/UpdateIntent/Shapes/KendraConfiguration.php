<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property bool|null $queryFilterStringEnabled
 * @property string|null $queryFilterString
 */
class KendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterStringEnabled?: bool|null,
     *     queryFilterString?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
