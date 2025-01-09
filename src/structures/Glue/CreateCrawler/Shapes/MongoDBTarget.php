<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionName
 * @property string $Path
 * @property bool $ScanAll
 */
class MongoDBTarget extends Shape
{
    /**
     * @param array{
     *     ConnectionName?: string,
     *     Path?: string,
     *     ScanAll?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
