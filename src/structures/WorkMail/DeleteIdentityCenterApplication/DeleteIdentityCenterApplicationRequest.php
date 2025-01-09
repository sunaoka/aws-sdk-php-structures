<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteIdentityCenterApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 */
class DeleteIdentityCenterApplicationRequest extends Request
{
    /**
     * @param array{ApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
