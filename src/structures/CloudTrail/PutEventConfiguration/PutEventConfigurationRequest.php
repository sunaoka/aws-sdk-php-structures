<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TrailName
 * @property string|null $EventDataStore
 * @property 'Standard'|'Large'|null $MaxEventSize
 * @property list<Shapes\ContextKeySelector>|null $ContextKeySelectors
 * @property list<Shapes\AggregationConfiguration>|null $AggregationConfigurations
 */
class PutEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TrailName?: string|null,
     *     EventDataStore?: string|null,
     *     MaxEventSize?: 'Standard'|'Large'|null,
     *     ContextKeySelectors?: list<Shapes\ContextKeySelector>|null,
     *     AggregationConfigurations?: list<Shapes\AggregationConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
