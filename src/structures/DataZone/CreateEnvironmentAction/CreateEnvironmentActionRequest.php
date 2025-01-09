<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $name
 * @property Shapes\ActionParameters $parameters
 */
class CreateEnvironmentActionRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     name: string,
     *     parameters: Shapes\ActionParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
