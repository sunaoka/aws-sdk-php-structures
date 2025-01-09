<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDomainEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property Shapes\DomainEntry $domainEntry
 */
class UpdateDomainEntryRequest extends Request
{
    /**
     * @param array{
     *     domainName: string,
     *     domainEntry: Shapes\DomainEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
