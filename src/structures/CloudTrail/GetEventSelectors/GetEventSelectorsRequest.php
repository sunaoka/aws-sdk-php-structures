<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 */
class GetEventSelectorsRequest extends Request
{
    /**
     * @param array{TrailName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
