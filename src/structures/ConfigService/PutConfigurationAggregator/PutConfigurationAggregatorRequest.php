<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property list<Shapes\AccountAggregationSource>|null $AccountAggregationSources
 * @property Shapes\OrganizationAggregationSource|null $OrganizationAggregationSource
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AggregatorFilters|null $AggregatorFilters
 */
class PutConfigurationAggregatorRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     AccountAggregationSources?: list<Shapes\AccountAggregationSource>|null,
     *     OrganizationAggregationSource?: Shapes\OrganizationAggregationSource|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AggregatorFilters?: Shapes\AggregatorFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
