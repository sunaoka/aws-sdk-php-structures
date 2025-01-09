<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DataSourceIds
 * @property list<string> $FaqIds
 * @property bool $DirectPutContent
 */
class ContentSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     DataSourceIds?: list<string>,
     *     FaqIds?: list<string>,
     *     DirectPutContent?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
