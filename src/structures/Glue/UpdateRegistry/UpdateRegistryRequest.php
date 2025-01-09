<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RegistryId $RegistryId
 * @property string $Description
 */
class UpdateRegistryRequest extends Request
{
    /**
     * @param array{
     *     RegistryId: Shapes\RegistryId,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
