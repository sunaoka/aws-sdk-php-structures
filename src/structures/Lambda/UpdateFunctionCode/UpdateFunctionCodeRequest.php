<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFile
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 * @property string|null $S3ObjectVersion
 * @property string|null $ImageUri
 * @property bool|null $Publish
 * @property bool|null $DryRun
 * @property string|null $RevisionId
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property string|null $SourceKMSKeyArn
 */
class UpdateFunctionCodeRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3Bucket?: string|null,
     *     S3Key?: string|null,
     *     S3ObjectVersion?: string|null,
     *     ImageUri?: string|null,
     *     Publish?: bool|null,
     *     DryRun?: bool|null,
     *     RevisionId?: string|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     SourceKMSKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
