<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Location
 * @property int|null $GitCloneDepth
 * @property bool|null $InsecureSsl
 */
class AwsCodeBuildProjectSource extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Location?: string|null,
     *     GitCloneDepth?: int|null,
     *     InsecureSsl?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
