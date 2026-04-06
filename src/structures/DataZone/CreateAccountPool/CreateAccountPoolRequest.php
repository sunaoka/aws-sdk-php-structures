<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAccountPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $name
 * @property string|null $description
 * @property 'MANUAL' $resolutionStrategy
 * @property Shapes\AccountSource $accountSource
 */
class CreateAccountPoolRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name: string,
     *     description?: string|null,
     *     resolutionStrategy: 'MANUAL',
     *     accountSource: Shapes\AccountSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
