<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MimeType
 * @property int|null $SizeClassified
 * @property bool|null $AdditionalOccurrences
 * @property ClassificationStatus|null $Status
 * @property list<SensitiveDataResult>|null $SensitiveData
 * @property CustomDataIdentifiersResult|null $CustomDataIdentifiers
 */
class ClassificationResult extends Shape
{
    /**
     * @param array{
     *     MimeType?: string|null,
     *     SizeClassified?: int|null,
     *     AdditionalOccurrences?: bool|null,
     *     Status?: ClassificationStatus|null,
     *     SensitiveData?: list<SensitiveDataResult>|null,
     *     CustomDataIdentifiers?: CustomDataIdentifiersResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
