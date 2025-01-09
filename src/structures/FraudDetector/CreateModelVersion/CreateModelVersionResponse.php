<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS' $modelType
 * @property string $modelVersionNumber
 * @property string $status
 */
class CreateModelVersionResponse extends Response
{
}
