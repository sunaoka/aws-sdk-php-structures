<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrailARN
 * @property list<Shapes\EventSelector>|null $EventSelectors
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 */
class GetEventSelectorsResponse extends Response
{
}
