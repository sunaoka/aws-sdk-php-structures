<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostUrl
 * @property string $SecretArn
 * @property 'LONDON'|'OTHERS' $ServiceNowBuildVersion
 * @property ServiceNowKnowledgeArticleConfiguration|null $KnowledgeArticleConfiguration
 * @property ServiceNowServiceCatalogConfiguration|null $ServiceCatalogConfiguration
 * @property 'HTTP_BASIC'|'OAUTH2'|null $AuthenticationType
 */
class ServiceNowConfiguration extends Shape
{
    /**
     * @param array{
     *     HostUrl: string,
     *     SecretArn: string,
     *     ServiceNowBuildVersion: 'LONDON'|'OTHERS',
     *     KnowledgeArticleConfiguration?: ServiceNowKnowledgeArticleConfiguration|null,
     *     ServiceCatalogConfiguration?: ServiceNowServiceCatalogConfiguration|null,
     *     AuthenticationType?: 'HTTP_BASIC'|'OAUTH2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
