<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAuditSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property bool|null $suppressIndefinitely
 * @property string|null $description
 */
class UpdateAuditSuppressionRequest extends Request
{
    /**
     * @param array{
     *     checkName: string,
     *     resourceIdentifier: Shapes\ResourceIdentifier,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     suppressIndefinitely?: bool|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
