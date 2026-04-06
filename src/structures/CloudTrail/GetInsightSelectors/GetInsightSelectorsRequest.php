<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TrailName
 * @property string|null $EventDataStore
 */
class GetInsightSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName?: string|null,
     *     EventDataStore?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
