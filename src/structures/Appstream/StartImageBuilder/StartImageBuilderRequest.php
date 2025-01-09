<?php

namespace Sunaoka\Aws\Structures\Appstream\StartImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $AppstreamAgentVersion
 */
class StartImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AppstreamAgentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
