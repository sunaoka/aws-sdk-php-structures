<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Location
 * @property int $GitCloneDepth
 * @property bool $InsecureSsl
 */
class AwsCodeBuildProjectSource extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Location?: string,
     *     GitCloneDepth?: int,
     *     InsecureSsl?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
