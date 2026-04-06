<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $queueEnvironmentId
 * @property string|null $clientToken
 * @property int<0, 10000>|null $priority
 * @property 'JSON'|'YAML'|null $templateType
 * @property string|null $template
 */
class UpdateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     queueEnvironmentId: string,
     *     clientToken?: string|null,
     *     priority?: int<0, 10000>|null,
     *     templateType?: 'JSON'|'YAML'|null,
     *     template?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
