<?php

namespace Sunaoka\Aws\Structures\kendra\CreateExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DataSourceIds
 * @property list<string>|null $FaqIds
 * @property bool|null $DirectPutContent
 */
class ContentSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     DataSourceIds?: list<string>|null,
     *     FaqIds?: list<string>|null,
     *     DirectPutContent?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
