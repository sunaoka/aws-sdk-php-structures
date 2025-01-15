<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutOrganizationConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConformancePackName
 * @property string|null $TemplateS3Uri
 * @property string|null $TemplateBody
 * @property string|null $DeliveryS3Bucket
 * @property string|null $DeliveryS3KeyPrefix
 * @property list<Shapes\ConformancePackInputParameter>|null $ConformancePackInputParameters
 * @property list<string>|null $ExcludedAccounts
 */
class PutOrganizationConformancePackRequest extends Request
{
    /**
     * @param array{
     *     OrganizationConformancePackName: string,
     *     TemplateS3Uri?: string|null,
     *     TemplateBody?: string|null,
     *     DeliveryS3Bucket?: string|null,
     *     DeliveryS3KeyPrefix?: string|null,
     *     ConformancePackInputParameters?: list<Shapes\ConformancePackInputParameter>|null,
     *     ExcludedAccounts?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
