<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\UpdateElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoTuneOptions|null $Options
 * @property AutoTuneStatus|null $Status
 */
class AutoTuneOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: AutoTuneOptions|null,
     *     Status?: AutoTuneStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
