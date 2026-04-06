<?php

namespace Sunaoka\Aws\Structures\GameSparks\ImportGameConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $File
 */
class ImportGameConfigurationSource extends Shape
{
    /**
     * @param array{File: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
