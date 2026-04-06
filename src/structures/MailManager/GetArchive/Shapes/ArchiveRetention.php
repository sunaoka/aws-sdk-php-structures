<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchive\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'THREE_MONTHS'|'SIX_MONTHS'|'NINE_MONTHS'|'ONE_YEAR'|'EIGHTEEN_MONTHS'|'TWO_YEARS'|'THIRTY_MONTHS'|'THREE_YEARS'|'FOUR_YEARS'|'FIVE_YEARS'|'SIX_YEARS'|'SEVEN_YEARS'|'EIGHT_YEARS'|'NINE_YEARS'|'TEN_YEARS'|'PERMANENT'|null $RetentionPeriod
 */
class ArchiveRetention extends Shape
{
    /**
     * @param array{RetentionPeriod?: 'THREE_MONTHS'|'SIX_MONTHS'|'NINE_MONTHS'|'ONE_YEAR'|'EIGHTEEN_MONTHS'|'TWO_YEARS'|'THIRTY_MONTHS'|'THREE_YEARS'|'FOUR_YEARS'|'FIVE_YEARS'|'SIX_YEARS'|'SEVEN_YEARS'|'EIGHT_YEARS'|'NINE_YEARS'|'TEN_YEARS'|'PERMANENT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
