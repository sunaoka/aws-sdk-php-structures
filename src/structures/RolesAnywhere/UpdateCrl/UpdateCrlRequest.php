<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\UpdateCrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $crlId
 * @property string|null $name
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $crlData
 */
class UpdateCrlRequest extends Request
{
    /**
     * @param array{
     *     crlId: string,
     *     name?: string|null,
     *     crlData?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
