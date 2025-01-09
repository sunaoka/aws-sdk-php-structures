<?php

namespace Sunaoka\Aws\Structures\Sfn\DeleteActivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $activityArn
 */
class DeleteActivityRequest extends Request
{
    /**
     * @param array{activityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
