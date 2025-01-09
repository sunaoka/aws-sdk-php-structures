<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 * @property list<Shapes\EventSelector> $EventSelectors
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 */
class PutEventSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName: string,
     *     EventSelectors?: list<Shapes\EventSelector>,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
