<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserArn
 * @property string|null $FirstName
 * @property string|null $LastName
 * @property string|null $Email
 * @property 'INITIALIZED'|'PENDING'|'REGISTERED'|'DISASSOCIATING'|'DEREGISTERING'|null $EnrollmentStatus
 * @property string|null $EnrollmentId
 */
class UserData extends Shape
{
    /**
     * @param array{
     *     UserArn?: string|null,
     *     FirstName?: string|null,
     *     LastName?: string|null,
     *     Email?: string|null,
     *     EnrollmentStatus?: 'INITIALIZED'|'PENDING'|'REGISTERED'|'DISASSOCIATING'|'DEREGISTERING'|null,
     *     EnrollmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
