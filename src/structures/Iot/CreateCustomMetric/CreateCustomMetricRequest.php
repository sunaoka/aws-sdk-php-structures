<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCustomMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string|null $displayName
 * @property 'string-list'|'ip-address-list'|'number-list'|'number' $metricType
 * @property list<Shapes\Tag>|null $tags
 * @property string $clientRequestToken
 */
class CreateCustomMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     displayName?: string|null,
     *     metricType: 'string-list'|'ip-address-list'|'number-list'|'number',
     *     tags?: list<Shapes\Tag>|null,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
