<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $User
 * @property string|null $Application
 * @property string|null $Database
 * @property string|null $Ssl
 * @property string|null $AuthMethod
 */
class RdsDbUserDetails extends Shape
{
    /**
     * @param array{
     *     User?: string|null,
     *     Application?: string|null,
     *     Database?: string|null,
     *     Ssl?: string|null,
     *     AuthMethod?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
