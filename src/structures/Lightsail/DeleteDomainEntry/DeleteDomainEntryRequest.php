<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDomainEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 * @property Shapes\DomainEntry $domainEntry
 */
class DeleteDomainEntryRequest extends Request
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
