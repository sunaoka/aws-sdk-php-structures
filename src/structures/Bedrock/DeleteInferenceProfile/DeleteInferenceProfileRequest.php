<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteInferenceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inferenceProfileIdentifier
 */
class DeleteInferenceProfileRequest extends Request
{
    /**
     * @param array{inferenceProfileIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
