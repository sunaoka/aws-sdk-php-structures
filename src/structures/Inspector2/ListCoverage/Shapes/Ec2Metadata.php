<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $amiId
 * @property 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS' $platform
 * @property array<string, string> $tags
 */
class Ec2Metadata extends Shape
{
    /**
     * @param array{
     *     amiId?: string,
     *     platform?: 'WINDOWS'|'LINUX'|'UNKNOWN'|'MACOS',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
