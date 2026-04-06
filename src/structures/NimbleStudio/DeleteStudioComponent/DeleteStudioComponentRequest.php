<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudioComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $studioComponentId
 * @property string $studioId
 */
class DeleteStudioComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     studioComponentId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
