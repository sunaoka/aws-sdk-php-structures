<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $flowIdentifier
 */
class CreateFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     flowIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
