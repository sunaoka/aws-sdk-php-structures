<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionName
 * @property string|null $Path
 * @property bool|null $ScanAll
 */
class MongoDBTarget extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string|null,
     *     Path?: string|null,
     *     ScanAll?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
