<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrailARN
 * @property list<Shapes\EventSelector>|null $EventSelectors
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 */
class PutEventSelectorsResponse extends Response
{
}
