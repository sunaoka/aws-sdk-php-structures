<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $RawContent
 * @property 'ATTACHMENT'|'INLINE'|null $ContentDisposition
 * @property string $FileName
 * @property string|null $ContentDescription
 * @property string|null $ContentId
 * @property 'BASE64'|'QUOTED_PRINTABLE'|'SEVEN_BIT'|null $ContentTransferEncoding
 * @property string|null $ContentType
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     RawContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     ContentDisposition?: 'ATTACHMENT'|'INLINE'|null,
     *     FileName: string,
     *     ContentDescription?: string|null,
     *     ContentId?: string|null,
     *     ContentTransferEncoding?: 'BASE64'|'QUOTED_PRINTABLE'|'SEVEN_BIT'|null,
     *     ContentType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
