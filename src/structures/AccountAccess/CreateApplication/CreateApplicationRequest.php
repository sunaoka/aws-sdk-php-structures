<?php

namespace Sunaoka\Aws\Structures\AccountAccess\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IdentitySource $identitySource
 * @property array<string, string>|null $tags
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     identitySource: Shapes\IdentitySource,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
