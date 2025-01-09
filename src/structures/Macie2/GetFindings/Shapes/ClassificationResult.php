<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $additionalOccurrences
 * @property CustomDataIdentifiers $customDataIdentifiers
 * @property string $mimeType
 * @property list<SensitiveDataItem> $sensitiveData
 * @property int $sizeClassified
 * @property ClassificationResultStatus $status
 */
class ClassificationResult extends Shape
{
    /**
     * @param array{
     *     additionalOccurrences?: bool,
     *     customDataIdentifiers?: CustomDataIdentifiers,
     *     mimeType?: string,
     *     sensitiveData?: list<SensitiveDataItem>,
     *     sizeClassified?: int,
     *     status?: ClassificationResultStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
