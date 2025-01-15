<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $additionalOccurrences
 * @property CustomDataIdentifiers|null $customDataIdentifiers
 * @property string|null $mimeType
 * @property list<SensitiveDataItem>|null $sensitiveData
 * @property int|null $sizeClassified
 * @property ClassificationResultStatus|null $status
 */
class ClassificationResult extends Shape
{
    /**
     * @param array{
     *     additionalOccurrences?: bool|null,
     *     customDataIdentifiers?: CustomDataIdentifiers|null,
     *     mimeType?: string|null,
     *     sensitiveData?: list<SensitiveDataItem>|null,
     *     sizeClassified?: int|null,
     *     status?: ClassificationResultStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
