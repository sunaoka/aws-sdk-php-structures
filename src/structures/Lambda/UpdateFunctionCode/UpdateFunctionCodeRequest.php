<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $ZipFile
 * @property string $S3Bucket
 * @property string $S3Key
 * @property string $S3ObjectVersion
 * @property string $ImageUri
 * @property bool $Publish
 * @property bool $DryRun
 * @property string $RevisionId
 * @property list<'x86_64'|'arm64'> $Architectures
 * @property string $SourceKMSKeyArn
 */
class UpdateFunctionCodeRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     ZipFile?: string,
     *     S3Bucket?: string,
     *     S3Key?: string,
     *     S3ObjectVersion?: string,
     *     ImageUri?: string,
     *     Publish?: bool,
     *     DryRun?: bool,
     *     RevisionId?: string,
     *     Architectures?: list<'x86_64'|'arm64'>,
     *     SourceKMSKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
