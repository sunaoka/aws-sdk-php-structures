<?php

namespace Sunaoka\Aws\Structures\ELBProxy\CreateProxy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $configurationBytes
 */
class ConfigurationArchive extends Shape
{
    /**
     * @param array{configurationBytes: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
