<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceName
 * @property list<string> $domainNames
 * @property 'LetsEncrypt' $certificateProvider
 */
class SetupRequest extends Shape
{
    /**
     * @param array{
     *     instanceName?: string,
     *     domainNames?: list<string>,
     *     certificateProvider?: 'LetsEncrypt'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
