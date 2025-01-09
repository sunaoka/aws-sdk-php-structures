<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetInferenceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inferenceProfileIdentifier
 */
class GetInferenceProfileRequest extends Request
{
    /**
     * @param array{inferenceProfileIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
