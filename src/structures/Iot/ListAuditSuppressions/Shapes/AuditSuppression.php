<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $checkName
 * @property ResourceIdentifier $resourceIdentifier
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property bool|null $suppressIndefinitely
 * @property string|null $description
 */
class AuditSuppression extends Shape
{
    /**
     * @param array{
     *     checkName: string,
     *     resourceIdentifier: ResourceIdentifier,
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
