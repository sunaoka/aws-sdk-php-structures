<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAccountPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccountSource $accountSource
 * @property string|null $description
 * @property string $domainIdentifier
 * @property string $name
 * @property 'MANUAL' $resolutionStrategy
 */
class CreateAccountPoolRequest extends Request
{
    /**
     * @param array{
     *     accountSource: Shapes\AccountSource,
     *     description?: string|null,
     *     domainIdentifier: string,
     *     name: string,
     *     resolutionStrategy: 'MANUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
