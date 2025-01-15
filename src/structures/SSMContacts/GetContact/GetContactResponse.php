<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ContactArn
 * @property string $Alias
 * @property string|null $DisplayName
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 * @property Shapes\Plan $Plan
 */
class GetContactResponse extends Response
{
}
