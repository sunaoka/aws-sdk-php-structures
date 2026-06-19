<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $promptIdentifier
 * @property string|null $promptVersion
 * @property 'ALL_DATA'|'METADATA_ONLY'|null $includedData
 */
class GetPromptRequest extends Request
{
    /**
     * @param array{
     *     promptIdentifier: string,
     *     promptVersion?: string|null,
     *     includedData?: 'ALL_DATA'|'METADATA_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
