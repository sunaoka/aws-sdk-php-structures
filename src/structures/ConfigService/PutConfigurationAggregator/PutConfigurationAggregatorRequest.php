<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property list<Shapes\AccountAggregationSource> $AccountAggregationSources
 * @property Shapes\OrganizationAggregationSource $OrganizationAggregationSource
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AggregatorFilters $AggregatorFilters
 */
class PutConfigurationAggregatorRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     AccountAggregationSources?: list<Shapes\AccountAggregationSource>,
     *     OrganizationAggregationSource?: Shapes\OrganizationAggregationSource,
     *     Tags?: list<Shapes\Tag>,
     *     AggregatorFilters?: Shapes\AggregatorFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
