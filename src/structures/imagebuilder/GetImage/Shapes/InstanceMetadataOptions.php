<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $httpTokens
 * @property int $httpPutResponseHopLimit
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     httpTokens?: string,
     *     httpPutResponseHopLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
