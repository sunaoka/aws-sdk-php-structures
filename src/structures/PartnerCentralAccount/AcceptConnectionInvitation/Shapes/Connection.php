<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AcceptConnectionInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Catalog
 * @property string $Id
 * @property string $Arn
 * @property string $OtherParticipantAccountId
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', ConnectionTypeDetail> $ConnectionTypes
 */
class Connection extends Shape
{
    /**
     * @param array{
     *     Catalog: string,
     *     Id: string,
     *     Arn: string,
     *     OtherParticipantAccountId: string,
     *     UpdatedAt: \Aws\Api\DateTimeResult,
     *     ConnectionTypes: array<'OPPORTUNITY_COLLABORATION'|'SUBSIDIARY', ConnectionTypeDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
