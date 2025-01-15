<?php

namespace Sunaoka\Aws\Structures\Glue\CreateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $BlueprintLocation
 * @property array<string, string>|null $Tags
 */
class CreateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     BlueprintLocation: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
