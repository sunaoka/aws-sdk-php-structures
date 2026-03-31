<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string|null $clientToken
 * @property int<0, 10000> $priority
 * @property 'JSON'|'YAML' $templateType
 * @property string $template
 */
class CreateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     clientToken?: string|null,
     *     priority: int<0, 10000>,
     *     templateType: 'JSON'|'YAML',
     *     template: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
