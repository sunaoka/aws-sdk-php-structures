<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string|null $description
 * @property string|null $clientToken
 */
class CreateFlowVersionRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
