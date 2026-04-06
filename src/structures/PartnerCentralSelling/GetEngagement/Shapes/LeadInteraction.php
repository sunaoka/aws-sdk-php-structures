<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceType
 * @property string $SourceId
 * @property string $SourceName
 * @property string|null $Usecase
 * @property \Aws\Api\DateTimeResult|null $InteractionDate
 * @property string $CustomerAction
 * @property string|null $BusinessProblem
 * @property LeadContact $Contact
 */
class LeadInteraction extends Shape
{
    /**
     * @param array{
     *     SourceType: string,
     *     SourceId: string,
     *     SourceName: string,
     *     Usecase?: string|null,
     *     InteractionDate?: \Aws\Api\DateTimeResult|null,
     *     CustomerAction: string,
     *     BusinessProblem?: string|null,
     *     Contact: LeadContact
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
