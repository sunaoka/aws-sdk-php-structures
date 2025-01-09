<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateIngestConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $stageArn
 * @property string $userId
 * @property array<string, string> $attributes
 * @property 'RTMP'|'RTMPS' $ingestProtocol
 * @property bool $insecureIngest
 * @property array<string, string> $tags
 */
class CreateIngestConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     stageArn?: string,
     *     userId?: string,
     *     attributes?: array<string, string>,
     *     ingestProtocol: 'RTMP'|'RTMPS',
     *     insecureIngest?: bool,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
