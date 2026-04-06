<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueueEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property int<0, 10000> $priority
 * @property string $queueId
 * @property string $template
 * @property 'JSON'|'YAML' $templateType
 */
class CreateQueueEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     priority: int<0, 10000>,
     *     queueId: string,
     *     template: string,
     *     templateType: 'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
