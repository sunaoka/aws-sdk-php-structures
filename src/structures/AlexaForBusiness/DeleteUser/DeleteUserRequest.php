<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserArn
 * @property string $EnrollmentId
 */
class DeleteUserRequest extends Request
{
    /**
     * @param array{
     *     UserArn?: string|null,
     *     EnrollmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
