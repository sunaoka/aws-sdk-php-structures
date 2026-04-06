<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property int<0, 10000>|null $priority
 * @property string $queueEnvironmentId
 * @property string $queueId
 * @property string|null $template
 * @property 'JSON'|'YAML'|null $templateType
 */
class UpdateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     priority?: int<0, 10000>|null,
     *     queueEnvironmentId: string,
     *     queueId: string,
     *     template?: string|null,
     *     templateType?: 'JSON'|'YAML'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
