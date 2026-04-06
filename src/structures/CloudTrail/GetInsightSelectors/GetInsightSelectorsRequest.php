<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 */
class GetInsightSelectorsRequest extends Request
{
    /**
     * @param array{TrailName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
