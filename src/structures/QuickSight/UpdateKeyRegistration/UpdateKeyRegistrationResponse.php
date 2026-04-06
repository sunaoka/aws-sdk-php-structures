<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FailedKeyRegistrationEntry>|null $FailedKeyRegistration
 * @property list<Shapes\SuccessfulKeyRegistrationEntry>|null $SuccessfulKeyRegistration
 * @property string|null $RequestId
 */
class UpdateKeyRegistrationResponse extends Response
{
}
