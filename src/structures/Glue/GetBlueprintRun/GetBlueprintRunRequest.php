<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintName
 * @property string $RunId
 */
class GetBlueprintRunRequest extends Request
{
    /**
     * @param array{
     *     BlueprintName: string,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
