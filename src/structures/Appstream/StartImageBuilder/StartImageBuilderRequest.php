<?php

namespace Sunaoka\Aws\Structures\Appstream\StartImageBuilder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $AppstreamAgentVersion
 */
class StartImageBuilderRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AppstreamAgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
