<?php

namespace Sunaoka\Aws\Structures\MPA\CreateIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentitySourceParameters $IdentitySourceParameters
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateIdentitySourceRequest extends Request
{
    /**
     * @param array{
     *     IdentitySourceParameters: Shapes\IdentitySourceParameters,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
