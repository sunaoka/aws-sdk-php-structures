<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'CREATION_FAILED'|'DELETION_FAILED' $statusCode
 */
class ScraperStatus extends Shape
{
    /**
     * @param array{statusCode: 'CREATING'|'ACTIVE'|'DELETING'|'CREATION_FAILED'|'DELETION_FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
