<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkersWithQualificationType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QualificationTypeId
 * @property string $WorkerId
 * @property \Aws\Api\DateTimeResult $GrantTime
 * @property int $IntegerValue
 * @property Locale $LocaleValue
 * @property 'Granted'|'Revoked' $Status
 */
class Qualification extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId?: string,
     *     WorkerId?: string,
     *     GrantTime?: \Aws\Api\DateTimeResult,
     *     IntegerValue?: int,
     *     LocaleValue?: Locale,
     *     Status?: 'Granted'|'Revoked'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
