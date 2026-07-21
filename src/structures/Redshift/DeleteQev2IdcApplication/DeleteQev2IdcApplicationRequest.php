<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteQev2IdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Qev2IdcApplicationArn
 */
class DeleteQev2IdcApplicationRequest extends Request
{
    /**
     * @param array{Qev2IdcApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
