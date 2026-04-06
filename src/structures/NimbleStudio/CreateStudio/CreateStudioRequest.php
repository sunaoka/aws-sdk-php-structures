<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $adminRoleArn
 * @property string|null $clientToken
 * @property string $displayName
 * @property Shapes\StudioEncryptionConfiguration|null $studioEncryptionConfiguration
 * @property string $studioName
 * @property array<string, string>|null $tags
 * @property string $userRoleArn
 */
class CreateStudioRequest extends Request
{
    /**
     * @param array{
     *     adminRoleArn: string,
     *     clientToken?: string|null,
     *     displayName: string,
     *     studioEncryptionConfiguration?: Shapes\StudioEncryptionConfiguration|null,
     *     studioName: string,
     *     tags?: array<string, string>|null,
     *     userRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
