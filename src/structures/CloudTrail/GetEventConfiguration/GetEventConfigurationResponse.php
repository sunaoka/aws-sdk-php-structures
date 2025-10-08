<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventDataStoreArn
 * @property 'Standard'|'Large'|null $MaxEventSize
 * @property list<Shapes\ContextKeySelector>|null $ContextKeySelectors
 */
class GetEventConfigurationResponse extends Response
{
}
