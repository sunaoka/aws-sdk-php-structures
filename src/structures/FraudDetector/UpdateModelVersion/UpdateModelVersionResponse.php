<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateModelVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $modelId
 * @property 'ONLINE_FRAUD_INSIGHTS'|'TRANSACTION_FRAUD_INSIGHTS'|'ACCOUNT_TAKEOVER_INSIGHTS'|null $modelType
 * @property string|null $modelVersionNumber
 * @property string|null $status
 */
class UpdateModelVersionResponse extends Response
{
}
