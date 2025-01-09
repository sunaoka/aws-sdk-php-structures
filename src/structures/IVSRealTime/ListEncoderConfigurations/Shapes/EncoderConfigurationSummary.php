<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListEncoderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property array<string, string> $tags
 */
class EncoderConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
