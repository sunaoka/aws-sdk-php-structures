<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $environmentIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property Shapes\ActionParameters|null $parameters
 */
class UpdateEnvironmentActionRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     domainIdentifier: string,
     *     environmentIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     parameters?: Shapes\ActionParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
