<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateBrowserProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
