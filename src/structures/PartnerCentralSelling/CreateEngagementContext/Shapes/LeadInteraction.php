<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceType
 * @property string|null $SourceId
 * @property string|null $SourceName
 * @property string|null $Usecase
 * @property \Aws\Api\DateTimeResult|null $InteractionDate
 * @property string|null $CustomerAction
 * @property string|null $BusinessProblem
 * @property LeadContact $Contact
 */
class LeadInteraction extends Shape
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     SourceId?: string|null,
     *     SourceName?: string|null,
     *     Usecase?: string|null,
     *     InteractionDate?: \Aws\Api\DateTimeResult|null,
     *     CustomerAction?: string|null,
     *     BusinessProblem?: string|null,
     *     Contact: LeadContact
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
