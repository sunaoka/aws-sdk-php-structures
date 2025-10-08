<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAccountPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccountSource|null $accountSource
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $name
 * @property 'MANUAL'|null $resolutionStrategy
 */
class UpdateAccountPoolRequest extends Request
{
    /**
     * @param array{
     *     accountSource?: Shapes\AccountSource|null,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string|null,
     *     resolutionStrategy?: 'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
