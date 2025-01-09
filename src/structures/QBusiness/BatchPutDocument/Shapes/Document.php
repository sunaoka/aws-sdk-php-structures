<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<DocumentAttribute> $attributes
 * @property DocumentContent $content
 * @property 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD' $contentType
 * @property string $title
 * @property AccessConfiguration $accessConfiguration
 * @property DocumentEnrichmentConfiguration $documentEnrichmentConfiguration
 * @property MediaExtractionConfiguration $mediaExtractionConfiguration
 */
class Document extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     attributes?: list<DocumentAttribute>,
     *     content?: DocumentContent,
     *     contentType?: 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD',
     *     title?: string,
     *     accessConfiguration?: AccessConfiguration,
     *     documentEnrichmentConfiguration?: DocumentEnrichmentConfiguration,
     *     mediaExtractionConfiguration?: MediaExtractionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
