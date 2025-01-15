<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateReportGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $bucketOwner
 * @property string|null $path
 * @property 'ZIP'|'NONE'|null $packaging
 * @property string|null $encryptionKey
 * @property bool|null $encryptionDisabled
 */
class S3ReportExportConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     bucketOwner?: string|null,
     *     path?: string|null,
     *     packaging?: 'ZIP'|'NONE'|null,
     *     encryptionKey?: string|null,
     *     encryptionDisabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
