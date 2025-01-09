<?php

namespace Sunaoka\Aws\Structures\RAM\UpdateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $name
 * @property bool $allowExternalPrincipals
 * @property string $clientToken
 */
class UpdateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     name?: string,
     *     allowExternalPrincipals?: bool,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
