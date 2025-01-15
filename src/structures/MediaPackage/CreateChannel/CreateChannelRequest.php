<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Id
 * @property array<string, string>|null $Tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Id: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
