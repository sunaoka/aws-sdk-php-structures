<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkName
 * @property ResourceIdentifier $resourceIdentifier
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property bool $suppressIndefinitely
 * @property string $description
 */
class AuditSuppression extends Shape
{
    /**
     * @param array{
     *     checkName: string,
     *     resourceIdentifier: ResourceIdentifier,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     suppressIndefinitely?: bool,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
