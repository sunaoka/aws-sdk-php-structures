<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEnforcedGuardrailsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListEnforcedGuardrailsConfigurationRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
