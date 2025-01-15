<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateRemoteAccessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'METERED'|'UNMETERED'|null $billingMethod
 * @property list<string>|null $vpceConfigurationArns
 */
class CreateRemoteAccessSessionConfiguration extends Shape
{
    /**
     * @param array{
     *     billingMethod?: 'METERED'|'UNMETERED'|null,
     *     vpceConfigurationArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
