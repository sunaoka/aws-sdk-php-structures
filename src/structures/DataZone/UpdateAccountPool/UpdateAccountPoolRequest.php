<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAccountPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property string|null $description
 * @property 'MANUAL'|null $resolutionStrategy
 * @property Shapes\AccountSource|null $accountSource
 */
class UpdateAccountPoolRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     description?: string|null,
     *     resolutionStrategy?: 'MANUAL'|null,
     *     accountSource?: Shapes\AccountSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
