<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property int<0, 10000> $priority
 * @property 'JSON'|'YAML' $templateType
 * @property string $template
 */
class CreateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     queueId: string,
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
