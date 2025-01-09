<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MimeType
 * @property int $SizeClassified
 * @property bool $AdditionalOccurrences
 * @property ClassificationStatus $Status
 * @property list<SensitiveDataResult> $SensitiveData
 * @property CustomDataIdentifiersResult $CustomDataIdentifiers
 */
class ClassificationResult extends Shape
{
    /**
     * @param array{
     *     MimeType?: string,
     *     SizeClassified?: int,
     *     AdditionalOccurrences?: bool,
     *     Status?: ClassificationStatus,
     *     SensitiveData?: list<SensitiveDataResult>,
     *     CustomDataIdentifiers?: CustomDataIdentifiersResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
