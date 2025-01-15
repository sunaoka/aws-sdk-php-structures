<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $amiId
 * @property 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS'|null $platform
 * @property array<string, string>|null $tags
 */
class Ec2Metadata extends Shape
{
    /**
     * @param array{
     *     amiId?: string|null,
     *     platform?: 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
