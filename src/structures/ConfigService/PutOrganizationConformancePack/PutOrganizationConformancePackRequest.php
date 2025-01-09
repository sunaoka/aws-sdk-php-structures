<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConformancePackName
 * @property string $TemplateS3Uri
 * @property string $TemplateBody
 * @property string $DeliveryS3Bucket
 * @property string $DeliveryS3KeyPrefix
 * @property list<Shapes\ConformancePackInputParameter> $ConformancePackInputParameters
 * @property list<string> $ExcludedAccounts
 */
class PutOrganizationConformancePackRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     TemplateS3Uri?: string,
     *     TemplateBody?: string,
     *     DeliveryS3Bucket?: string,
     *     DeliveryS3KeyPrefix?: string,
     *     ConformancePackInputParameters?: list<Shapes\ConformancePackInputParameter>,
     *     ExcludedAccounts?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
