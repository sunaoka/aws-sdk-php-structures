<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $studioComponentId
 * @property string $studioId
 */
class GetStudioComponentRequest extends Request
{
    /**
     * @param array{
     *     studioComponentId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
