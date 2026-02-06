<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteBrowserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string|null $clientToken
 */
class DeleteBrowserProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
