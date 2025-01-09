<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 */
class DescribeAuditSuppressionRequest extends Request
{
    /**
     * @param array{
     *     checkName: string,
     *     resourceIdentifier: Shapes\ResourceIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
