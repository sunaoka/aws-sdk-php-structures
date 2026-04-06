<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $adminRoleArn
 * @property string|null $clientToken
 * @property string|null $displayName
 * @property string $studioId
 * @property string|null $userRoleArn
 */
class UpdateStudioRequest extends Request
{
    /**
     * @param array{
     *     adminRoleArn?: string|null,
     *     clientToken?: string|null,
     *     displayName?: string|null,
     *     studioId: string,
     *     userRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
