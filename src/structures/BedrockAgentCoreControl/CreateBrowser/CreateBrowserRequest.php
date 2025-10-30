<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $executionRoleArn
 * @property Shapes\BrowserNetworkConfiguration $networkConfiguration
 * @property Shapes\RecordingConfig|null $recording
 * @property Shapes\BrowserSigningConfigInput|null $browserSigning
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateBrowserRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     executionRoleArn?: string|null,
     *     networkConfiguration: Shapes\BrowserNetworkConfiguration,
     *     recording?: Shapes\RecordingConfig|null,
     *     browserSigning?: Shapes\BrowserSigningConfigInput|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
