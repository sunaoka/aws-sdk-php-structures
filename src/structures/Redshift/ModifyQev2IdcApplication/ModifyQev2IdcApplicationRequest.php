<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyQev2IdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Qev2IdcApplicationArn
 * @property string|null $IdcDisplayName
 */
class ModifyQev2IdcApplicationRequest extends Request
{
    /**
     * @param array{
     *     Qev2IdcApplicationArn: string,
     *     IdcDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
