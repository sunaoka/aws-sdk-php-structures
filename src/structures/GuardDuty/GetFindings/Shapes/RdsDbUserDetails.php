<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $User
 * @property string $Application
 * @property string $Database
 * @property string $Ssl
 * @property string $AuthMethod
 */
class RdsDbUserDetails extends Shape
{
    /**
     * @param array{
     *     User?: string,
     *     Application?: string,
     *     Database?: string,
     *     Ssl?: string,
     *     AuthMethod?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
