<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Id
 */
class UpdateChannelRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
