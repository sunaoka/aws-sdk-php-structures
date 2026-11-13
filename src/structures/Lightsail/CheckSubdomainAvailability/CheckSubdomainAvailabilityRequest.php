<?php

namespace Sunaoka\Aws\Structures\Lightsail\CheckSubdomainAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subdomainName
 * @property bool|null $reserve
 */
class CheckSubdomainAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     subdomainName: string,
     *     reserve?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
