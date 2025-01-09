<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ChangeType
 * @property Entity $Entity
 * @property string $Details
 * @property JsonDocumentType $DetailsDocument
 * @property list<ErrorDetail> $ErrorDetailList
 * @property string $ChangeName
 */
class ChangeSummary extends Shape
{
    /**
     * @param array{
     *     ChangeType?: string,
     *     Entity?: Entity,
     *     Details?: string,
     *     DetailsDocument?: JsonDocumentType,
     *     ErrorDetailList?: list<ErrorDetail>,
     *     ChangeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
