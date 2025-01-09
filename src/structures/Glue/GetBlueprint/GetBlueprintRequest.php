<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool $IncludeBlueprint
 * @property bool $IncludeParameterSpec
 */
class GetBlueprintRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeBlueprint?: bool,
     *     IncludeParameterSpec?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
