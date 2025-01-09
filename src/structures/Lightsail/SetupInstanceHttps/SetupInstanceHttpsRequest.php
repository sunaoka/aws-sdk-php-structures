<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetupInstanceHttps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property string $emailAddress
 * @property list<string> $domainNames
 * @property 'LetsEncrypt' $certificateProvider
 */
class SetupInstanceHttpsRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     emailAddress: string,
     *     domainNames: list<string>,
     *     certificateProvider: 'LetsEncrypt'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
