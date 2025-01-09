<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCustomMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string $displayName
 * @property 'string-list'|'ip-address-list'|'number-list'|'number' $metricType
 * @property list<Shapes\Tag> $tags
 * @property string $clientRequestToken
 */
class CreateCustomMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     displayName?: string,
     *     metricType: 'string-list'|'ip-address-list'|'number-list'|'number',
     *     tags?: list<Shapes\Tag>,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
