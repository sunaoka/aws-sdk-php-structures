<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<DocumentAttribute>|null $attributes
 * @property DocumentContent|null $content
 * @property 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD'|null $contentType
 * @property string|null $title
 * @property AccessConfiguration|null $accessConfiguration
 * @property DocumentEnrichmentConfiguration|null $documentEnrichmentConfiguration
 * @property MediaExtractionConfiguration|null $mediaExtractionConfiguration
 */
class Document extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     attributes?: list<DocumentAttribute>|null,
     *     content?: DocumentContent|null,
     *     contentType?: 'PDF'|'HTML'|'MS_WORD'|'PLAIN_TEXT'|'PPT'|'RTF'|'XML'|'XSLT'|'MS_EXCEL'|'CSV'|'JSON'|'MD'|null,
     *     title?: string|null,
     *     accessConfiguration?: AccessConfiguration|null,
     *     documentEnrichmentConfiguration?: DocumentEnrichmentConfiguration|null,
     *     mediaExtractionConfiguration?: MediaExtractionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
