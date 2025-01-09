<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAppInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property string $Name
 * @property string $Metadata
 */
class UpdateAppInstanceRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     Name: string,
     *     Metadata?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
