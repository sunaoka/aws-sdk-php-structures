<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property string $displayName
 * @property Shapes\DataSourceConfiguration $configuration
 * @property Shapes\DataSourceVpcConfiguration|null $vpcConfiguration
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $syncSchedule
 * @property string|null $roleArn
 * @property string|null $clientToken
 * @property Shapes\DocumentEnrichmentConfiguration|null $documentEnrichmentConfiguration
 * @property Shapes\MediaExtractionConfiguration|null $mediaExtractionConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     displayName: string,
     *     configuration: Shapes\DataSourceConfiguration,
     *     vpcConfiguration?: Shapes\DataSourceVpcConfiguration|null,
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     syncSchedule?: string|null,
     *     roleArn?: string|null,
     *     clientToken?: string|null,
     *     documentEnrichmentConfiguration?: Shapes\DocumentEnrichmentConfiguration|null,
     *     mediaExtractionConfiguration?: Shapes\MediaExtractionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
