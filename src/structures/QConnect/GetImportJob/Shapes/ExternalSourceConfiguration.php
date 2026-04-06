<?php

namespace Sunaoka\Aws\Structures\QConnect\GetImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AMAZON_CONNECT' $source
 * @property Configuration $configuration
 */
class ExternalSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     source: 'AMAZON_CONNECT',
     *     configuration: Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
