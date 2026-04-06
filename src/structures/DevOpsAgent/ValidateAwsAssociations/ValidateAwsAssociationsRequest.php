<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ValidateAwsAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 */
class ValidateAwsAssociationsRequest extends Request
{
    /**
     * @param array{agentSpaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
