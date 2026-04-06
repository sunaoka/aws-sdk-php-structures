<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAgentSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $locale
 */
class UpdateAgentSpaceRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
