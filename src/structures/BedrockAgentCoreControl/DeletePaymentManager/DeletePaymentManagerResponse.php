<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentManager;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $paymentManagerId
 */
class DeletePaymentManagerResponse extends Response
{
}
