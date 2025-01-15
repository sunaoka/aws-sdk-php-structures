<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property string|null $Metadata
 */
class UpdateAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     Name: string,
     *     Metadata?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
