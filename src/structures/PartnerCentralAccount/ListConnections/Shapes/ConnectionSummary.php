<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string $Arn
 * @property string $OtherParticipantAccountId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', ConnectionTypeSummary> $ConnectionTypes
 */
class ConnectionSummary extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Id: string,
     *     Arn: string,
     *     OtherParticipantAccountId: string,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     ConnectionTypes: array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', ConnectionTypeSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
