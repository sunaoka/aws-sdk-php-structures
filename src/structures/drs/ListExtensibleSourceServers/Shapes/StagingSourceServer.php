<?php

namespace Sunaoka\Aws\Structures\drs\ListExtensibleSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostname
 * @property string|null $arn
 * @property array<string, string>|null $tags
 */
class StagingSourceServer extends Shape
{
    /**
     * @param array{
     *     hostname?: string|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
