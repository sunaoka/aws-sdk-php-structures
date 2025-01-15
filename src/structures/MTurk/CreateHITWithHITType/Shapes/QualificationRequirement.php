<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITWithHITType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QualificationTypeId
 * @property 'LessThan'|'LessThanOrEqualTo'|'GreaterThan'|'GreaterThanOrEqualTo'|'EqualTo'|'NotEqualTo'|'Exists'|'DoesNotExist'|'In'|'NotIn' $Comparator
 * @property list<int>|null $IntegerValues
 * @property list<Locale>|null $LocaleValues
 * @property bool|null $RequiredToPreview
 * @property 'Accept'|'PreviewAndAccept'|'DiscoverPreviewAndAccept'|null $ActionsGuarded
 */
class QualificationRequirement extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Comparator: 'LessThan'|'LessThanOrEqualTo'|'GreaterThan'|'GreaterThanOrEqualTo'|'EqualTo'|'NotEqualTo'|'Exists'|'DoesNotExist'|'In'|'NotIn',
     *     IntegerValues?: list<int>|null,
     *     LocaleValues?: list<Locale>|null,
     *     RequiredToPreview?: bool|null,
     *     ActionsGuarded?: 'Accept'|'PreviewAndAccept'|'DiscoverPreviewAndAccept'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
