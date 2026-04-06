<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ScopeDetails|null $Scope
 * @property string|null $ClientToken
 * @property string|null $Comment
 * @property string $DataSetId
 * @property Shapes\NotificationDetails|null $Details
 * @property 'DATA_DELAY'|'DATA_UPDATE'|'DEPRECATION'|'SCHEMA_CHANGE' $Type
 */
class SendDataSetNotificationRequest extends Request
{
    /**
     * @param array{
     *     Scope?: Shapes\ScopeDetails|null,
     *     ClientToken?: string|null,
     *     Comment?: string|null,
     *     DataSetId: string,
     *     Details?: Shapes\NotificationDetails|null,
     *     Type: 'DATA_DELAY'|'DATA_UPDATE'|'DEPRECATION'|'SCHEMA_CHANGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
