<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawler\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $DeltaTables
 * @property string $ConnectionName
 * @property bool $WriteManifest
 * @property bool $CreateNativeDeltaTable
 */
class DeltaTarget extends Shape
{
    /**
     * @param array{
     *     DeltaTables?: list<string>,
     *     ConnectionName?: string,
     *     WriteManifest?: bool,
     *     CreateNativeDeltaTable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
