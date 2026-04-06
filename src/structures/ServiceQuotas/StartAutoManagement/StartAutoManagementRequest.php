<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\StartAutoManagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACCOUNT' $OptInLevel
 * @property 'NotifyOnly'|'NotifyAndAdjust' $OptInType
 * @property string|null $NotificationArn
 * @property array<string, list<string>>|null $ExclusionList
 */
class StartAutoManagementRequest extends Request
{
    /**
     * @param array{
     *     OptInLevel: 'ACCOUNT',
     *     OptInType: 'NotifyOnly'|'NotifyAndAdjust',
     *     NotificationArn?: string|null,
     *     ExclusionList?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
