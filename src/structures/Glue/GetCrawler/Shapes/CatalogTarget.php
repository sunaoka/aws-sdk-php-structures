<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property list<string> $Tables
 * @property string|null $ConnectionName
 * @property string|null $EventQueueArn
 * @property string|null $DlqEventQueueArn
 */
class CatalogTarget extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     Tables: list<string>,
     *     ConnectionName?: string|null,
     *     EventQueueArn?: string|null,
     *     DlqEventQueueArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
