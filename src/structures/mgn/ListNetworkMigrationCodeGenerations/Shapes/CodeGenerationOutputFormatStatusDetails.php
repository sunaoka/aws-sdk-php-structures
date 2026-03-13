<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusDetailList
 */
class CodeGenerationOutputFormatStatusDetails extends Shape
{
    /**
     * @param array{
     *     status?: 'SUCCEEDED'|'FAILED'|null,
     *     statusDetailList?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
