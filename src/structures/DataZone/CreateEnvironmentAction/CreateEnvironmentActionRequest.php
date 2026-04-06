<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironmentAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $name
 * @property Shapes\ActionParameters $parameters
 * @property string|null $description
 */
class CreateEnvironmentActionRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     name: string,
     *     parameters: Shapes\ActionParameters,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
