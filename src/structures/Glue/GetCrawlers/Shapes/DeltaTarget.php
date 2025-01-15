<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DeltaTables
 * @property string|null $ConnectionName
 * @property bool|null $WriteManifest
 * @property bool|null $CreateNativeDeltaTable
 */
class DeltaTarget extends Shape
{
    /**
     * @param array{
     *     DeltaTables?: list<string>|null,
     *     ConnectionName?: string|null,
     *     WriteManifest?: bool|null,
     *     CreateNativeDeltaTable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
