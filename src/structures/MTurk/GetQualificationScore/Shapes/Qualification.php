<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationScore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QualificationTypeId
 * @property string|null $WorkerId
 * @property \Aws\Api\DateTimeResult|null $GrantTime
 * @property int|null $IntegerValue
 * @property Locale|null $LocaleValue
 * @property 'Granted'|'Revoked'|null $Status
 */
class Qualification extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId?: string|null,
     *     WorkerId?: string|null,
     *     GrantTime?: \Aws\Api\DateTimeResult|null,
     *     IntegerValue?: int|null,
     *     LocaleValue?: Locale|null,
     *     Status?: 'Granted'|'Revoked'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
