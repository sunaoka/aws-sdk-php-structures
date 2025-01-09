<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConformancePackName
 * @property string $TemplateS3Uri
 * @property string $TemplateBody
 * @property string $DeliveryS3Bucket
 * @property string $DeliveryS3KeyPrefix
 * @property list<Shapes\ConformancePackInputParameter> $ConformancePackInputParameters
 * @property Shapes\TemplateSSMDocumentDetails $TemplateSSMDocumentDetails
 */
class PutConformancePackRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackName: string,
     *     TemplateS3Uri?: string,
     *     TemplateBody?: string,
     *     DeliveryS3Bucket?: string,
     *     DeliveryS3KeyPrefix?: string,
     *     ConformancePackInputParameters?: list<Shapes\ConformancePackInputParameter>,
     *     TemplateSSMDocumentDetails?: Shapes\TemplateSSMDocumentDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
