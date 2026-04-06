<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 * @property Shapes\ActionParameters|null $parameters
 * @property string|null $name
 * @property string|null $description
 */
class UpdateEnvironmentActionRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string,
     *     parameters?: Shapes\ActionParameters|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
