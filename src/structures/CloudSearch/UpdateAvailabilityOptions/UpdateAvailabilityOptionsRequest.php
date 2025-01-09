<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateAvailabilityOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool $MultiAZ
 */
class UpdateAvailabilityOptionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MultiAZ: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
