<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 */
class DeleteStudioRequest extends Request
{
    /**
     * @param array{StudioId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
