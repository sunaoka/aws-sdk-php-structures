<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditSuppression;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property bool $suppressIndefinitely
 * @property string $description
 */
class DescribeAuditSuppressionResponse extends Response
{
}
