<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListEncoderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class EncoderConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
