<?php

namespace Sunaoka\Aws\Structures\RAM\UpdateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string|null $name
 * @property bool|null $allowExternalPrincipals
 * @property string|null $clientToken
 */
class UpdateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     name?: string|null,
     *     allowExternalPrincipals?: bool|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
