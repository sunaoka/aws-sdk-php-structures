<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 * @property string $EventDataStore
 */
class GetInsightSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName?: string,
     *     EventDataStore?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
