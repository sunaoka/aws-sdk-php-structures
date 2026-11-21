<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateManagedApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ApiSignature $apiSignature
 * @property array<string, string>|null $tags
 */
class CreateManagedApiRequest extends Request
{
    /**
     * @param array{
     *     apiSignature: Shapes\ApiSignature,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
