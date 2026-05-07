<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $paymentConnectorId
 */
class DeletePaymentConnectorResponse extends Response
{
}
