<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConversionSource $source
 * @property Shapes\ConversionTarget $target
 */
class TestConversionRequest extends Request
{
    /**
     * @param array{
     *     source: Shapes\ConversionSource,
     *     target: Shapes\ConversionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
