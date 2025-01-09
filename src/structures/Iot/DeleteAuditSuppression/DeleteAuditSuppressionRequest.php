<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuditSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 */
class DeleteAuditSuppressionRequest extends Request
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
