<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property bool $IncludeBlueprint
 * @property bool $IncludeParameterSpec
 */
class BatchGetBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     Names: list<string>,
     *     IncludeBlueprint?: bool,
     *     IncludeParameterSpec?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
