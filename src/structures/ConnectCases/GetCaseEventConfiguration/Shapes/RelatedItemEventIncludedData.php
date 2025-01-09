<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseEventConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $includeContent
 */
class RelatedItemEventIncludedData extends Shape
{
    /**
     * @param array{includeContent: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
