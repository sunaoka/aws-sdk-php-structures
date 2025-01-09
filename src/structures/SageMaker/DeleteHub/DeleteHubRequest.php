<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 */
class DeleteHubRequest extends Request
{
    /**
     * @param array{HubName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
