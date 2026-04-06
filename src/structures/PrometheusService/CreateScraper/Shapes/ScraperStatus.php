<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED'|'DELETION_FAILED' $statusCode
 */
class ScraperStatus extends Shape
{
    /**
     * @param array{statusCode: 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'CREATION_FAILED'|'UPDATE_FAILED'|'DELETION_FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
