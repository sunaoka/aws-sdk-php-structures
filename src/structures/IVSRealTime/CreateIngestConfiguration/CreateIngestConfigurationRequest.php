<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $stageArn
 * @property string|null $userId
 * @property array<string, string>|null $attributes
 * @property 'RTMP'|'RTMPS' $ingestProtocol
 * @property bool|null $insecureIngest
 * @property array<string, string>|null $tags
 */
class CreateIngestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     stageArn?: string|null,
     *     userId?: string|null,
     *     attributes?: array<string, string>|null,
     *     ingestProtocol: 'RTMP'|'RTMPS',
     *     insecureIngest?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
