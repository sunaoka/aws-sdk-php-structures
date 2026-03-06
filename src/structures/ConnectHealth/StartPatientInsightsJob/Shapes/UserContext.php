<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLINICIAN' $role
 * @property string $userId
 * @property 'PRIMARY_CARE'|null $specialty
 */
class UserContext extends Shape
{
    /**
     * @param array{
     *     role: 'CLINICIAN',
     *     userId: string,
     *     specialty?: 'PRIMARY_CARE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
