<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceDefinitionId
 * @property string $ResourceDefinitionVersionId
 */
class GetResourceDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     ResourceDefinitionId: string,
     *     ResourceDefinitionVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
