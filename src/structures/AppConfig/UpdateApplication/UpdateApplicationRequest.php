<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $Name
 * @property string $Description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
