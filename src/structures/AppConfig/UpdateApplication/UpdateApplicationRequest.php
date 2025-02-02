<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
