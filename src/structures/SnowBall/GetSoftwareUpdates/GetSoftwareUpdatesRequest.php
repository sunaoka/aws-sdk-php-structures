<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetSoftwareUpdates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetSoftwareUpdatesRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
