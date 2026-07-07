<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverlessFunctionName
 * @property string|null $runtime
 * @property array<string, string>|null $functionTags
 */
class ServerlessFunctionMetadata extends Shape
{
    /**
     * @param array{
     *     serverlessFunctionName?: string|null,
     *     runtime?: string|null,
     *     functionTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
