<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $instanceName
 * @property list<string>|null $domainNames
 * @property 'LetsEncrypt'|null $certificateProvider
 */
class SetupRequest extends Shape
{
    /**
     * @param array{
     *     instanceName?: string|null,
     *     domainNames?: list<string>|null,
     *     certificateProvider?: 'LetsEncrypt'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
