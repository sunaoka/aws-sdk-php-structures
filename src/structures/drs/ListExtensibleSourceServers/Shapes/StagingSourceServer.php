<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $hostname
 * @property array<string, string> $tags
 */
class StagingSourceServer extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     hostname?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
