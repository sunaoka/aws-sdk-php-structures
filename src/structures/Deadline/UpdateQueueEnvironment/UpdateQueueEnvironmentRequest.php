<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property string $queueEnvironmentId
 * @property int<0, 10000>|null $priority
 * @property 'JSON'|'YAML'|null $templateType
 * @property string|null $template
 */
class UpdateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
     *     queueEnvironmentId: string,
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
