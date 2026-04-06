<?php

namespace Sunaoka\Aws\Structures\QConnect\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Configuration $configuration
 * @property 'AMAZON_CONNECT' $source
 */
class ExternalSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     configuration: Configuration,
     *     source: 'AMAZON_CONNECT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
