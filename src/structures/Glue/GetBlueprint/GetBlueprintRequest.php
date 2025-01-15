<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property bool|null $IncludeBlueprint
 * @property bool|null $IncludeParameterSpec
 */
class GetBlueprintRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IncludeBlueprint?: bool|null,
     *     IncludeParameterSpec?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
