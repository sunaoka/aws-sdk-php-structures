<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateUserProficiencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property list<Shapes\UserProficiencyDisassociate> $UserProficiencies
 */
class DisassociateUserProficienciesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     UserProficiencies: list<Shapes\UserProficiencyDisassociate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
