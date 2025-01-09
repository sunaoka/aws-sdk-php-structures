<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $queueEnvironmentId
 * @property int $priority
 * @property 'JSON'|'YAML' $templateType
 * @property string $template
 */
class UpdateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     queueId: string,
     *     queueEnvironmentId: string,
     *     priority?: int,
     *     templateType?: 'JSON'|'YAML',
     *     template?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
