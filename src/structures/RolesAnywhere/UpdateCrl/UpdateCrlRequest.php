<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $crlData
 * @property string $crlId
 * @property string $name
 */
class UpdateCrlRequest extends Request
{
    /**
     * @param array{
     *     crlData?: string|resource|\Psr\Http\Message\StreamInterface,
     *     crlId: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
