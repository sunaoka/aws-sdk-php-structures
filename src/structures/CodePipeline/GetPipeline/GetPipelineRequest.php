<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property int $version
 */
class GetPipelineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
