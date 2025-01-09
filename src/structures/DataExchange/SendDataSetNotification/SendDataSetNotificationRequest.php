<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ScopeDetails $Scope
 * @property string $ClientToken
 * @property string $Comment
 * @property string $DataSetId
 * @property Shapes\NotificationDetails $Details
 * @property 'DATA_DELAY'|'DATA_UPDATE'|'DEPRECATION'|'SCHEMA_CHANGE' $Type
 */
class SendDataSetNotificationRequest extends Request
{
    /**
     * @param array{
     *     Scope?: Shapes\ScopeDetails,
     *     ClientToken?: string,
     *     Comment?: string,
     *     DataSetId: string,
     *     Details?: Shapes\NotificationDetails,
     *     Type: 'DATA_DELAY'|'DATA_UPDATE'|'DEPRECATION'|'SCHEMA_CHANGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
