<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $studioId
 */
class GetStudioRequest extends Request
{
    /**
     * @param array{studioId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
