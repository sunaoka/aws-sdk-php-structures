<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDomainUnit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string $name
 */
class UpdateDomainUnitRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
