<?php

namespace Sunaoka\Aws\Structures\MediaPackage\CreateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Id
 * @property array<string, string> $Tags
 */
class CreateChannelRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Id: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
