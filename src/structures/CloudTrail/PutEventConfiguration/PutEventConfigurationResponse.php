<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrailARN
 * @property string|null $EventDataStoreArn
 * @property 'Standard'|'Large'|null $MaxEventSize
 * @property list<Shapes\ContextKeySelector>|null $ContextKeySelectors
 * @property list<Shapes\AggregationConfiguration>|null $AggregationConfigurations
 */
class PutEventConfigurationResponse extends Response
{
}
