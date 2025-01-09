<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Id
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
