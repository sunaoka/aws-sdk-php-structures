<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $BlueprintLocation
 */
class UpdateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     BlueprintLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
