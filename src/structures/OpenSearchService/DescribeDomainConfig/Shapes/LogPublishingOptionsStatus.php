<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption> $Options
 * @property OptionStatus $Status
 */
class LogPublishingOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options?: array<'INDEX_SLOW_LOGS'|'SEARCH_SLOW_LOGS'|'ES_APPLICATION_LOGS'|'AUDIT_LOGS', LogPublishingOption>,
     *     Status?: OptionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
