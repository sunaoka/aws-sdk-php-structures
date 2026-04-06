<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $studioId
 */
class DeleteStudioRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
