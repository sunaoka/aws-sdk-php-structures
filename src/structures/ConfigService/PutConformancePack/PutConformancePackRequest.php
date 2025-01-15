<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property string|null $TemplateS3Uri
 * @property string|null $TemplateBody
 * @property string|null $DeliveryS3Bucket
 * @property string|null $DeliveryS3KeyPrefix
 * @property list<Shapes\ConformancePackInputParameter>|null $ConformancePackInputParameters
 * @property Shapes\TemplateSSMDocumentDetails|null $TemplateSSMDocumentDetails
 */
class PutConformancePackRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     TemplateS3Uri?: string|null,
     *     TemplateBody?: string|null,
     *     DeliveryS3Bucket?: string|null,
     *     DeliveryS3KeyPrefix?: string|null,
     *     ConformancePackInputParameters?: list<Shapes\ConformancePackInputParameter>|null,
     *     TemplateSSMDocumentDetails?: Shapes\TemplateSSMDocumentDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
