<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $tags
 * @property string|null $amiId
 * @property 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS'|null $platform
 */
class Ec2Metadata extends Shape
{
    /**
     * @param array{
     *     tags?: array<string, string>|null,
     *     amiId?: string|null,
     *     platform?: 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
