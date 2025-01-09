<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $queueId
 * @property int $priority
 * @property 'JSON'|'YAML' $templateType
 * @property string $template
 */
class CreateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     queueId: string,
     *     priority: int,
     *     templateType: 'JSON'|'YAML',
     *     template: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
