<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Title
 * @property string|resource|\Psr\Http\Message\StreamInterface $Blob
 * @property S3Path $S3Path
 * @property list<DocumentAttribute> $Attributes
 * @property list<Principal> $AccessControlList
 * @property list<HierarchicalPrincipal> $HierarchicalAccessControlList
 * @property 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD' $ContentType
 * @property string $AccessControlConfigurationId
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Title?: string,
     *     Blob?: string|resource|\Psr\Http\Message\StreamInterface,
     *     S3Path?: S3Path,
     *     Attributes?: list<DocumentAttribute>,
     *     AccessControlList?: list<Principal>,
     *     HierarchicalAccessControlList?: list<HierarchicalPrincipal>,
     *     ContentType?: 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD',
     *     AccessControlConfigurationId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
