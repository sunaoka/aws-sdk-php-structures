<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetInferenceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inferenceProfileIdentifier
 * @property string|null $projectIdentifier
 */
class GetInferenceProfileRequest extends Request
{
    /**
     * @param array{
     *     inferenceProfileIdentifier: string,
     *     projectIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
