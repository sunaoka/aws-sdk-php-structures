<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property list<string> $Tables
 * @property string $ConnectionName
 * @property string $EventQueueArn
 * @property string $DlqEventQueueArn
 */
class CatalogTarget extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     Tables: list<string>,
     *     ConnectionName?: string,
     *     EventQueueArn?: string,
     *     DlqEventQueueArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
