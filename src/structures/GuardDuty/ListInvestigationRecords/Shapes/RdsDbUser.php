<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $User
 * @property string|null $Application
 * @property string|null $Database
 * @property string|null $AuthMethod
 * @property string|null $Ssl
 */
class RdsDbUser extends Shape
{
    /**
     * @param array{
     *     User?: string|null,
     *     Application?: string|null,
     *     Database?: string|null,
     *     AuthMethod?: string|null,
     *     Ssl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
