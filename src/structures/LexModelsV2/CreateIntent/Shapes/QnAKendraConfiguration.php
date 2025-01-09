<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property bool $queryFilterStringEnabled
 * @property string $queryFilterString
 * @property bool $exactResponse
 */
class QnAKendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterStringEnabled?: bool,
     *     queryFilterString?: string,
     *     exactResponse?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
