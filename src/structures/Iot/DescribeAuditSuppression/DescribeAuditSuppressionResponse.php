<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditSuppression;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $checkName
 * @property Shapes\ResourceIdentifier|null $resourceIdentifier
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property bool|null $suppressIndefinitely
 * @property string|null $description
 */
class DescribeAuditSuppressionResponse extends Response
{
}
