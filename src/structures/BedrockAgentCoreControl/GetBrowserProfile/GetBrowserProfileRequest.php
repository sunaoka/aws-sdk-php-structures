<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetBrowserProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 */
class GetBrowserProfileRequest extends Request
{
    /**
     * @param array{profileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
