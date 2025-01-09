<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewableHITs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QualificationTypeId
 * @property 'LessThan'|'LessThanOrEqualTo'|'GreaterThan'|'GreaterThanOrEqualTo'|'EqualTo'|'NotEqualTo'|'Exists'|'DoesNotExist'|'In'|'NotIn' $Comparator
 * @property list<int> $IntegerValues
 * @property list<Locale> $LocaleValues
 * @property bool $RequiredToPreview
 * @property 'Accept'|'PreviewAndAccept'|'DiscoverPreviewAndAccept' $ActionsGuarded
 */
class QualificationRequirement extends Shape
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Comparator: 'LessThan'|'LessThanOrEqualTo'|'GreaterThan'|'GreaterThanOrEqualTo'|'EqualTo'|'NotEqualTo'|'Exists'|'DoesNotExist'|'In'|'NotIn',
     *     IntegerValues?: list<int>,
     *     LocaleValues?: list<Locale>,
     *     RequiredToPreview?: bool,
     *     ActionsGuarded?: 'Accept'|'PreviewAndAccept'|'DiscoverPreviewAndAccept'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
