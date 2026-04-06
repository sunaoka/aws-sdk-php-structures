<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\UpdateAutoManagement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NotifyOnly'|'NotifyAndAdjust'|null $OptInType
 * @property string|null $NotificationArn
 * @property array<string, list<string>>|null $ExclusionList
 */
class UpdateAutoManagementRequest extends Request
{
    /**
     * @param array{
     *     OptInType?: 'NotifyOnly'|'NotifyAndAdjust'|null,
     *     NotificationArn?: string|null,
     *     ExclusionList?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
