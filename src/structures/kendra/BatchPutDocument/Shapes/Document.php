<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Title
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Blob
 * @property S3Path|null $S3Path
 * @property list<DocumentAttribute>|null $Attributes
 * @property list<Principal>|null $AccessControlList
 * @property list<HierarchicalPrincipal>|null $HierarchicalAccessControlList
 * @property 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD'|null $ContentType
 * @property string|null $AccessControlConfigurationId
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Title?: string|null,
     *     Blob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     S3Path?: S3Path|null,
     *     Attributes?: list<DocumentAttribute>|null,
     *     AccessControlList?: list<Principal>|null,
     *     HierarchicalAccessControlList?: list<HierarchicalPrincipal>|null,
     *     ContentType?: 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD'|null,
     *     AccessControlConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
