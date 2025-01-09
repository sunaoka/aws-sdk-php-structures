<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReportGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $bucketOwner
 * @property string $path
 * @property 'ZIP'|'NONE' $packaging
 * @property string $encryptionKey
 * @property bool $encryptionDisabled
 */
class S3ReportExportConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     bucketOwner?: string,
     *     path?: string,
     *     packaging?: 'ZIP'|'NONE',
     *     encryptionKey?: string,
     *     encryptionDisabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
