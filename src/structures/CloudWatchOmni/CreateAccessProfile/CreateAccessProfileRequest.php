<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $name
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateAccessProfileRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     name: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
