<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property bool|null $IncludeBlueprint
 * @property bool|null $IncludeParameterSpec
 */
class BatchGetBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     Names: list<string>,
     *     IncludeBlueprint?: bool|null,
     *     IncludeParameterSpec?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
