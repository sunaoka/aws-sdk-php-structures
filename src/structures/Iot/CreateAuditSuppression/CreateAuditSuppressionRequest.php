<?php

namespace Sunaoka\Aws\Structures\Iot\CreateAuditSuppression;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property bool $suppressIndefinitely
 * @property string $description
 * @property string $clientRequestToken
 */
class CreateAuditSuppressionRequest extends Request
{
    /**
     * @param array{
     *     checkName: string,
     *     resourceIdentifier: Shapes\ResourceIdentifier,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     suppressIndefinitely?: bool,
     *     description?: string,
     *     clientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
