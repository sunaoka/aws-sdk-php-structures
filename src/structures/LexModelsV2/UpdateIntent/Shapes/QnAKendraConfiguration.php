<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property bool|null $queryFilterStringEnabled
 * @property string|null $queryFilterString
 * @property bool|null $exactResponse
 */
class QnAKendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterStringEnabled?: bool|null,
     *     queryFilterString?: string|null,
     *     exactResponse?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
