<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrailARN
 * @property list<Shapes\EventSelector> $EventSelectors
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 */
class PutEventSelectorsResponse extends Response
{
}
