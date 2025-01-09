<?php

namespace Sunaoka\Aws\Structures\Glue\CreateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $BlueprintLocation
 * @property array<string, string> $Tags
 */
class CreateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     BlueprintLocation: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
