<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 */
class DeleteEnvironmentBlueprintConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
