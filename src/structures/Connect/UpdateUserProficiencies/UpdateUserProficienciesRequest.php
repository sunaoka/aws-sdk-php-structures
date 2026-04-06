<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserProficiencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property list<Shapes\UserProficiency> $UserProficiencies
 */
class UpdateUserProficienciesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     UserProficiencies: list<Shapes\UserProficiency>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
