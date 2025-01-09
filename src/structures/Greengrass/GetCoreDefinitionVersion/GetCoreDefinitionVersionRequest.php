<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetCoreDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreDefinitionId
 * @property string $CoreDefinitionVersionId
 */
class GetCoreDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     CoreDefinitionId: string,
     *     CoreDefinitionVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
