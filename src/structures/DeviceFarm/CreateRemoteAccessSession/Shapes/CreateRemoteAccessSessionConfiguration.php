<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'METERED'|'UNMETERED' $billingMethod
 * @property list<string> $vpceConfigurationArns
 */
class CreateRemoteAccessSessionConfiguration extends Shape
{
    /**
     * @param array{
     *     billingMethod?: 'METERED'|'UNMETERED',
     *     vpceConfigurationArns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
