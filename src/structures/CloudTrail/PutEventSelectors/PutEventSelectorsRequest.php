<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 * @property list<Shapes\EventSelector>|null $EventSelectors
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 */
class PutEventSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName: string,
     *     EventSelectors?: list<Shapes\EventSelector>|null,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
