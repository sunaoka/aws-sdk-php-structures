<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipelineBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintName
 * @property string|null $Format
 */
class GetPipelineBlueprintRequest extends Request
{
    /**
     * @param array{
     *     BlueprintName: string,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
