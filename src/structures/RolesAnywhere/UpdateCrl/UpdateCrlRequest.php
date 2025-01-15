<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $crlData
 * @property string $crlId
 * @property string|null $name
 */
class UpdateCrlRequest extends Request
{
    /**
     * @param array{
     *     crlData?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     crlId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
